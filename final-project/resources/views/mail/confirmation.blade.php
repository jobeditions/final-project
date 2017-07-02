<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Confirmation</title>
</head>
<body>
    <h1>Merci pour l'enregistrement</h1>

    <p>
        Nous avons juste besoin que vous confirmez votre adresse courriel rapidement!
        Veuillez clicker le lien <a href='{{ url("register/confirm/{$user->token}") }}'> pour confirmer</a> votre adresse mail électronique.
    </p>
</body>
</html>