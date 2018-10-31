<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creer un compte</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="/core/options.php" enctype="multipart/form-data">
      <h1 class="h3 mb-3 font-weight-normal">Creer un compte</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="hidden" name="action" value="create">
      <input type="email" name="email"  class="form-control" placeholder="Email address" required autofocus>
      <input type="text" name="username"  class="form-control" placeholder="Login" required autofocus>
      <input type="text" name="name"  class="form-control" placeholder="Nom de la personne" required autofocus>
      <input type="text" name="prenom" class="form-control" placeholder="Prenom" required autofocus>
      <input type="text" name="sexe"  class="form-control" placeholder="Sexe" required autofocus>
      <input type="number" name="age"  class="form-control"  required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <input type="file" name="image"  class="form-control" placeholder="Age" required autofocus>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
      <p class="mt-5 mb-3 text-muted">&copy; <a href="/view/loginview.php">se Connecter</a></p>
    </form>
  </body>
</html>