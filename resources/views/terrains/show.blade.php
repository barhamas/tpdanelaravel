<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Terrain</title>
</head>
<body>
<nav>
    <a href="{{ route('terrains.index') }}">Home</a>
    <a href="{{ route('terrains.create') }}">Créer un Terrain</a>
</nav>
<h1>Détails du Terrain</h1>
<p>ID: {{ $terrain->id }}</p>
<p>Longueur: {{ $terrain->longueur }}</p>
<p>Largeur: {{ $terrain->largeur }}</p>
<p>Type de Papier: {{ $terrain->type_de_papier }}</p>
<a href="{{ route('terrains.edit', $terrain->id) }}">Éditer</a>
<form action="{{ route('terrains.destroy', $terrain->id) }}" method="POST" style="display:inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
</body>
</html>
