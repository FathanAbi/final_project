<!DOCTYPE html>
<html>
<head>
    <title>Films</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1 class="mt-4">Films</h1>
        <a href="/input" class="btn btn-primary mt-4">Add a Film</a>
        <ul class="list-group mt-4">
            @foreach($films as $film)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>{{ $film->title }}</strong><br>
                            ({{ $film->release_year }}) - Directed by {{ $film->director }}
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('storage/' . $film->image_path) }}" alt="{{ $film->title }}" class="img-fluid">
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
