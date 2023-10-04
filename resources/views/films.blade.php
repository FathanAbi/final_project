<!DOCTYPE html>
<html>
<head>
    <title>Films</title>
</head>
<body>
    <h1>Films</h1>
    <ul>
        @foreach($films as $film)
            <li>
                <strong>{{ $film->title }}</strong>
                ({{ $film->release_year }}) - Directed by {{ $film->director }}
                <img src="{{ asset('storage/' . $film->image_path) }}" alt="{{ $film->title }}" style="max-width: 200px;">
            </li>
        @endforeach
    </ul>
    <a href="/input">Add a Film</a>
</body>
</html>
