<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenue | Marcella Sandrine
    </title>
</head>
<body>
<h3 style="color:#141956">Commentaire - Le Blog de Marcella Sandrine</h3>
<p>Bonjour <span style="color:#141956"><b>M/Mme {{$comments->user->name}},</b></span></p>
<p><span style="color: #888888; font-size: 0.95em; line-height: 1.8em; font-weight: 400; margin-bottom: 1em;"><b><i>{{$comments->body}}</i></b></br></p>
<p>Pour l'article <b>{{$comments->post->title}}</b></p>
<p> Votre commentaire a été approuvé par le modérateur</p></span>

<p><b><i>Pour accéder à votre compte, cliquez sur le lien suivant</i></b></p>
</br>
</br>

<button class="btn btn-info btn-lg btn-block" type="submit" style="background-color:#1789E1;padding:5px 10px;font-size:1.2 em;font-weight:bold; color:#fff;margin-left: 300px; margin-bottom: 50px"><a href="www.laracasts.com">Accéder</a></button>
<p></p>
<p>

<b><i>Merci, à Bientot.</i></b></p>

</body>
</html>