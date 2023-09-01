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

    <h3>Liste des classemets</h3>
    <table>
        <tr>
            <td>
                note
            </td>
            <td>
                action
            </td>
            
        </tr>
        <tr>
        foreach($classements as $classement)
        <td>{{$classement->note}}</td>
        <td ><button><a href="{{ route('classements.edit', $classement->id) }}">Modifier</a></button>
                    <form action="{{ route('classements.destroy', $classement->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> <a href="{{ route('classements.destroy', $classement->id) }}" data-toggle="modal" data-target="#confirm-delete">Supprimer</a></button>
                    </form>
                </td>
        @endforeach
        </tr>
        <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('#confirm').attr('href', $(e.relatedTarget).data('href'));
});

   </script>
</body>
</html>