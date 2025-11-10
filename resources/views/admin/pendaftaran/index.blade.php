<table border='1' cellpadding='8' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pet</th>
            <th>Tanggal Daftar</th>
            <th>Keluhan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pendaftaran as $index => $p)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $p->pet->nama }}</td>
            <td>{{ $p->tanggal_daftar }}</td>
            <td>{{ $p->keluhan }}</td>
            <td>{{ $p->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
