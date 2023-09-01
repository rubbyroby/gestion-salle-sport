<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>trier !</h1>
<th><a href="{{ route('joueurs.index', ['tri' => 'nom']) }}">Nom</a></th>
<th><a href="{{ route('joueurs.index', ['tri' => 'prenom']) }}">Prénom</a></th>
<th><a href="{{ route('joueurs.index', ['tri' => 'sport']) }}">Sport</a></th>


@foreach ($joueurs as $joueur)
    <div>
        <h2>{{ $joueur->nom }} {{ $joueur->prenom }}</h2>
        <p>Sport : {{ $joueur->sport->nom }}</p>
    </div>
@endforeach

</body>
</html>