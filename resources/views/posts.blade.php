<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Listado de Post</h1>

    <form method="get" action="/" style="margin: 16px 0;">
        <input
            type="text"
            name="q"
            value="{{ $query ?? '' }}"
            placeholder="Buscar por titulo o descripcion"
        >
        <button type="submit">Buscar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
            </tr>
        </thead>

        @forelse ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No hay resultados.</td>
            </tr>
        @endforelse
    </table>

</body>
</html>

