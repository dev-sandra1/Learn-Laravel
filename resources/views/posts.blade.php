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

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
            </tr>
        </thead>

        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>

