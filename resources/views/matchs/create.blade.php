<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ajouter un match</h1>
    <form action="post">
    @csrf
        <label for="id">id:</label>
        <input type="text" name="id">

        <label for="titulaire">titulaire:</label>
        <input type="text" name="titulaire">

        <label for="horaire">horaire:</label>
        <input type="text" name="horaire">

        <label for="id_resultat">id_resultat:</label>
        <input type="text" name="id_resultat">

        <label for="id_equipe">id_equipe:</label>
        <input type="text" name="id_equipe">

        <label for="id_classement">id_classement:</label>
        <input type="text" name="id_classement">

        <button type="submit"></button>
        
        @error('id')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('titulaire')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('horaire')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('date_de_naissance')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('id_equipe')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('id_resultat')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('id_classement')
        <div class="error">{{ $message }}</div>
        @enderror 
        
    </form>
</body>
</html>