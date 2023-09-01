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
    <h3>Liste des equipes</h3>
    <table>
        <tr>
            <td>
                titulaire
            </td>
            <td>
                nombre d'equipe
            </td>
            <td>
                date de creation
            </td>
            <td>
                action
            </td>
        </tr>
        <tr>
        foreach($equipes as $equipe)
        <td>{{$equipe->titulaire}}</td>
        <td>{{$equipe->nombre}}</td>
        <td>{{$equipe->date_de_creation}}</td>
        <td><button><a href="{{ route('equipes.edit', $equipe->id) }}">Modifier</a></button>
                    <form action="{{ route('equipes.destroy', $equipe->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" > <a href="{{ route('equipes.destroy', $equipe->id) }}" data-toggle="modal" data-target="#confirm-delete">Supprimer</a></button>
                       
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