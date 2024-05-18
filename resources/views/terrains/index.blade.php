<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Terrains</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('terrains.index') }}">Home</a>
    <a class="navbar-brand" href="{{ route('terrains.create') }}">Créer un Terrain</a>
</nav>
<div class="container mt-4">
    <h1>Liste des Terrains</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Longueur</th>
            <th>Largeur</th>
            <th>Type de Papier</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($terrains as $terrain)
            <tr>
                <td>{{ $terrain->id }}</td>
                <td>{{ $terrain->longueur }}</td>
                <td>{{ $terrain->largeur }}</td>
                <td>{{ $terrain->type_de_papier }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('terrains.show', $terrain->id) }}">Voir</a>
                    <a class="btn btn-warning btn-sm" href="{{ route('terrains.edit', $terrain->id) }}">Éditer</a>
                    <form action="{{ route('terrains.destroy', $terrain->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $terrains->links() }}

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
