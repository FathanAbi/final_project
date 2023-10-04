<!DOCTYPE html>
<html>
<head>
    <title>Input Film</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Input Film</h1>
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
        <form action="/input" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="title">Film Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="release_year">Release Year:</label>
                <input type="number" name="release_year" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" name="director" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" accept="image/jpeg, image/jpg, image/png" class="form-control-file" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/films" class="btn btn-secondary mt-3">View Films</a>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
