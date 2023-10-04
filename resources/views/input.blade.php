<!DOCTYPE html>
<html>
<head>
    <title>Input Film</title>
</head>
<body>
    <h1>Input Film</h1>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="/input" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Film Title:</label>
        <input type="text" name="title" required><br>

        <label for="release_year">Release Year:</label>
        <input type="number" name="release_year" required><br>

        <label for="director">Director:</label>
        <input type="text" name="director" required><br>

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/jpeg, image/jpg, image/png" required><br>

        <button type="submit">Submit</button>
    </form>
    <a href="/films">View Films</a>
</body>
</html>
