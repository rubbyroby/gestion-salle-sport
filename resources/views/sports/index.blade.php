<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sport</h1>
    <a href="{{url('classements.create')}}">creer classement</a>
    <a href="{{url('equipe.create')}}">creer equipe</a>
    <a href="{{url('joueur.create')}}">creer joueur</a>
    <a href="{{url('match.create')}}">creer match</a>
    <a href="{{url('resultat.create')}}">creer resultat</a>
    <a href="{{url('sport.create')}}">creer sport</a>
    <h3>Liste des sports</h3>
    <ul>
        foreach($sports as $sport)
        <li>{{$sport->titulaire}} </li>
        <button><a href="{{ route('sports.edit', $sport->id) }}">Modifier</a></button>
                    <form action="{{ route('sports.destroy', $sport->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" > <a href="{{ route('sports.destroy', $sport->id) }}" data-toggle="modal" data-target="#confirm-delete">Supprimer</a></button>
                    
                </td>
        
        @endforeach
    </ul>
    <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('#confirm').attr('href', $(e.relatedTarget).data('href'));
});

   </script>
</body>
</html>