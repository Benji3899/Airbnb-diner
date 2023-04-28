<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page admin</title>
</head>

<body>
<h1>Bienvenue sur la page admin</h1>
<div>
    <ul>
        @foreach($users as $user)
            <ul>
                <li><b>Utilisateur n°{{$user->id}}</b></li>
                <li>Nom: {{$user->fullname}}</li>
                <li>Email: {{$user->email}}</li>
                <br>
            </ul>
        @endforeach
    </ul>
</div>

</body>
</html>
