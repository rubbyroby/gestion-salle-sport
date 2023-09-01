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
    <h3>Liste des joueuers</h3>
    <table>
        <tr>
            <td>
                nom
            </td>
            <td>
                prenom
            </td>
            <td>
                date de naissance
            </td>
            <td>
                taill
            </td>
            <td>
                poids
            </td>
            <td>
                id_sport
            </td>
            <td>
                id_equipe
            </td>
            <td>
                action
            </td>
        </tr>
        <tr>
        foreach($joueurs as $joueur)
        <td>{{$joueur->nom}}</td>
        <td>{{$joueur->prenom}}</td>
        <td>{{$joueur->date_de_naissance}}</td>
        <td>{{$joueur->taill}}</td>
        <td>{{$joueur->poids}}</td>
        <td>{{$joueur->id_sport}}</td>
        <td>{{$joueur->id_equipe}}</td>
        <td><button><a href="{{ route('joueurs.edit', $joueur->id) }}">Modifier</a></button>
                    <form action="{{ route('joueurs.destroy', $joueur->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> <a href="{{ route('joueurs.destroy', $joueur->id) }}" data-toggle="modal" data-target="#confirm-delete">Supprimer</a></button>
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