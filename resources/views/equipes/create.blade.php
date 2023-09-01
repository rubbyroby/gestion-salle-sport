<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ajouter un equipe</h1>
    <form action="post">
    @csrf
        <label for="id">id:</label>
        <input type="text" name="id">

        <label for="tetulaire">tetulaire:</label>
        <input type="text" name="tetulaire">

        <label for="nombre">nombre:</label>
        <input type="text" name="nombre">

        <label for="date_de_creation">date de creation:</label>
        <input type="text" name="date_de_creation">

        <button type="submit"></button>


        @error('id')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('tetulaire')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('nombre')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('date_de_creation')
        <div class="error">{{ $message }}</div>
        @enderror 

    </form>
</body>
</html>