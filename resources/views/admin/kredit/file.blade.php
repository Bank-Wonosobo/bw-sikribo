<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $kredit->no_kredit }} - {{ $kredit->nama_peminjam }}</title>
</head>
<body>
    <div style="height: 100vh; width:100%">
        <iframe src="{{ asset('storage' . $kredit->file) }}" width="100%" height="100%" frameborder="0"></iframe>
    </div>
</body>
</html>
