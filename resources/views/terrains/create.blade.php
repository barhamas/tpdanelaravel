<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Terrain</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('terrains.index') }}">Home</a>
    <a class="navbar-brand" href="{{ route('terrains.create') }}">Créer un Terrain</a>
</nav>
<div class="container mt-4">
    <h1>Créer un Terrain</h1>
    <form action="{{ route('terrains.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="longueur">Longueur:</label>
            <input type="text" name="longueur" id="longueur" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="largeur">Largeur:</label>
            <input type="text" name="largeur" id="largeur" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type_de_papier">Type de Papier:</label>
            <select name="type_de_papier" id="type_de_papier" class="form-control" required>
                <option value="bail">Bail</option>
                <option value="titre foncier">Titre Foncier</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
