<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer un Terrain</title>
</head>
<body>
<nav>
    <a href="{{ route('terrains.index') }}">Home</a>
    <a href="{{ route('terrains.create') }}">Créer un Terrain</a>
</nav>
<h1>Éditer un Terrain</h1>
<form action="{{ route('terrains.update', $terrain->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="longueur">Longueur:</label>
    <input type="text" name="longueur" id="longueur" value="{{ $terrain->longueur }}" required>

    <label for="largeur">Largeur:</label>
    <input type="text" name="largeur" id="largeur" value="{{ $terrain->largeur }}" required>

    <label for="type_de_papier">Type de Papier:</label>
    <select name="type_de_papier" id="type_de_papier" required>
        <option value="bail" {{ $terrain->type_de_papier == 'bail' ? 'selected' : '' }}>Bail</option>
        <option value="titre foncier" {{ $terrain->type_de_papier == 'titre foncier' ? 'selected' : '' }}>Titre Foncier</option>
    </select>

    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
