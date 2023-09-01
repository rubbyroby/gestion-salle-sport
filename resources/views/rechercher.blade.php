<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>chercher un joueur</h1>
    <form action="{{ route('search') }}" method="get">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prenom" placeholder="Prénom">
    <input type="text" name="sport" placeholder="Sport">
    <button type="submit">Rechercher</button>
</form>

@foreach ($joueurs as $joueur)
    <div>
        <h2>{{ $joueur->nom }} {{ $joueur->prenom }}</h2>
        <p>Sport : {{ $joueur->sport->nom }}</p>
    </div>
@endforeach


</body>
</html>