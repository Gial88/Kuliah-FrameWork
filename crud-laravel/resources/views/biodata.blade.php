<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>Halaman Biodata</h1>
        <p>Nama : {{$nama}}</p>
        <p>Matkul Pilihan : </p>
        <ul>
        @foreach($matkul as $mk)
            <li>{{$mk}}</li>
        @endforeach
        </ul>
</body>
</html>