<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include necessary headers here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('images/bg1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: whitesmoke;
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
    }

    h1,
    li {
        color: white;
        /* Mengubah warna teks pada elemen h1 dan li menjadi putih */
    }

    table {
        background-color: navy;
        width: 90%;
        border-collapse: collapse;
    }
</style>

<body>
    <div class="container">
        <h1 align="center">Add New Film</h1>
        <form action="process_add_film.php" method="post">
            <div class="mb-3">
                <label for="film_name" class="form-label">Film Name:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre:</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration:</label>
                <input type="text" class="form-control" id="durasi" name="durasi" required>
            </div>
            <div class="mb-3">
                <label for="actor" class="form-label">Actor:</label>
                <input type="text" class="form-control" id="aktor" name="aktor" required>
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Sutradara:</label>
                <input type="text" class="form-control" id="sutradara" name="sutradara" required>
            </div>
            <div class="mb-3">
                <label for="showtime" class="form-label">Jam Tayang:</label>
                <input type="text" class="form-control" id="jam_tayang" name="jam_tayang" required>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Negara:</label>
                <input type="text" class="form-control" id="negara" name="negara" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga:</label>
                <input type="text" class="form-control" id="harga" name="harga" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Film</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>