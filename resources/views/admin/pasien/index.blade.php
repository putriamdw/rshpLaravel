<table border='1' cellpadding='8' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>No WA</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasien as $index => $p)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->no_wa }}</td>
            <td>{{ $p->alamat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
