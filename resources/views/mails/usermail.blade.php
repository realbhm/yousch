<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Yousch Nouveau Utilisateur</title>
<body>

   <div class="container">
    <div class="container mt-5">
     <div class="card text-center col-md-6">
  <div class="card-body">
    <p class=" mt-5">Bonjour <strong>{{ $mail_data['name'] }}</strong>,  <br> <br><br>voici vos informations de connection à Yousch: </p>

    <p class="card-text mt-2"> <strong>Email:  {{$mail_data['email']}}</strong> </p>
    <p class="card-text mt-2"> <strong>Mot de passe: {{$mail_data['password']}}</strong></p>
    <a href="https://yousch-app.site/login" class="btn btn-primary" target="_blank">Cliquer ici pour vous connecter</a>
  </div><br><br>
  <div class="card-footer text-danger">
    Ces informations sont strictement confidentiel et personnel. <br>
      Ne les partager surtout pas.
  </div>
    </div>
</div>
   </div>
</body>
</html>
