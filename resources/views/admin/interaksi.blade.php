@extends('template_admin')

@section('content')
<h3>Manajemen Interaksi Rekomendasi Karir</h3>
<table class="table">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Rekomendasi Karir</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($interaksi as $data)
        <tr>
            <td>{{ $data->nim }}</td>
            <td>{{ $data->rekomendasiKarir->judul }}</td>
            <td>{{ $data->suka ? 'Suka' : 'Tidak Suka' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
