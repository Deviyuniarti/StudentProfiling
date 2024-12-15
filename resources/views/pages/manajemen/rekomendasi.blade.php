<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Rekomendasi</title>
</head>
<body>
    <h1>Manajemen Rekomendasi Karir</h1>
    <table>
        <thead>
            <tr>
                <th>Jalur Karir</th>
                <th>Deskripsi</th>
                <th>Jumlah Like</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekomendasi as $r)
                <tr>
                    <td>{{ $r->jalur_karir }}</td>
                    <td>{{ $r->deskripsi }}</td>
                    <td>{{ $r->jumlah_like }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
