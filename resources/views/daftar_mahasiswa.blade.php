<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>   
    <ul>
        <li>
            Nama : Christo Joseph Tua Carolus  <br>
            NIM : 221402088 <br>
            Gender : Laki-laki <br>
            <form action="/detail_mahasiswa" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Detail Mahasiswa[POST]</button>
            </form>
            <form action="/detail_mahasiswa" method="GET">
            @csrf
            <button type="submit" class="btn btn-primary">Detail Mahasiswa[GET]</button>
            </form>
        </li>
        <li>
            Nama : Farhan Anfasa Maulana <br>
            NIM : 221402097 <br>
            Gender : Laki-laki
            
        </li>
    </ul>
</body>
</html>