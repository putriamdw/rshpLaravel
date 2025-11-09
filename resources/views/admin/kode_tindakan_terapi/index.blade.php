<table border='1' cellpadding='8' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Tindakan</th>
            <th>Biaya</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kodeTindakanTerapi as $index => $tindakan)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $tindakan->kode }}</td>
            <td>{{ $tindakan->nama_tindakan }}</td>
            <td>{{ $tindakan->biaya }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
