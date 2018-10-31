<?php


class Manager {

 public $connection = null;
 public $session = null;
public function __construct($conn ,$session){
    $this->connection = $conn->conn;
    $this->session = $session;


}

    public function login($data){
        $sql = 'SELECT* FROM users WHERE (username =:username AND password =:password) ';
        $bind = $this->connection->prepare($sql ,  array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $bind->execute(array(':username'=>htmlentities($data['username']) , ":password" => htmlentities($data['password'])));
        $result = $bind->fetch();
       if (empty($result)) {
            header('Location: /view/loginview.php');
       }
       $this->session->setSession("user",htmlentities($data['username']));
       header('Location: /view/listingview.php');

    }


    public function signup($data, $file){
        

    

        $sql = 'INSERT INTO users(name,sexe,prenom,age,username,email,password , image) VALUES (:name,:sexe ,:prenom,:age ,:username ,:email , :password , :image) ';
        $bind = $this->connection->prepare($sql ,  array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $bind->bindParam(":name", htmlentities($data['name']) );
        $bind->bindParam(":prenom", htmlentities($data['prenom']) );
        $bind->bindParam(":sexe", htmlentities($data['sexe']) );
        $bind->bindParam(":age", htmlentities($data['age']) );
        $bind->bindParam(":username", htmlentities($data['username']) );
        $bind->bindParam(":email", htmlentities($data['email']) );
        $bind->bindParam(":password", htmlentities($data['password']) );
        $bind->bindParam(":image", htmlentities($file['name']) );



        $bind->execute();

        $this->session->setSession("user",htmlentities($data['name']));



        header('Location: /view/listingview.php');

    }

    public function retreive(){
        $sql = "SELECT * FROM users";
        $fetch = $this->connection->prepare($sql);
        $fetch->execute();
        $fetch->setFetchMode(PDO::FETCH_ASSOC);

       
      return $fetch->fetchAll();

    }


}



?>