<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ajouter un resultat</h1>
    <form action="post">
    @csrf
        <label for="id">id:</label>
        <input type="text" name="id">

        <label for="scor">scor:</label>
        <input type="text" name="scor">

        <button type="submit"></button>
        @error('id')
        <div class="error">{{ $message }}</div>
        @enderror 
        @error('scor')
        <div class="error">{{ $message }}</div>
        @enderror 
        
    </form>
</body>
</html>