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
    <h3>Liste des matchs</h3>
    <table>
        <tr>
            <td>
                titulaire
            </td>
            <td>
                horaire
            </td>
           
            <td>
                id_equipe
            </td>
            <td>
                id_resultat
            </td>
            <td>
                action
            </td>
        </tr>
        <tr>
        foreach($matchs as $match)
        <td>{{$match->titulaire}}</td>
        <td>{{$match->horaire}}</td>
        <td>{{$match->id_equipe}}</td>
        <td>{{$match->id_resultat}}</td>
        <td><button><a href="{{ route('matchs.edit', $match->id) }}">Modifier</a></button>
                    <form action="{{ route('matchs.destroy', $match->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" > <a href="{{ route('matchs.destroy', $match->id) }}" data-toggle="modal" data-target="#confirm-delete">Supprimer</a></button>
                    </form>
                </td>
        @endforeach
        </tr>
    </table>
    <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('#confirm').attr('href', $(e.relatedTarget).data('href'));
});

   </script>
</body>
</html>