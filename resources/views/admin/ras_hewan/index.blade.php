<table border='1' cellpadding='8' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Ras</th>
            <th>Jenis Hewan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ras_hewan as $index => $ras)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $ras->nama_ras }}</td>
            <td>{{ $ras->jenis_hewan?->nama_jenis_hewan?? '-' }} </td>
        </tr>
        @endforeach
    </tbody>
</table>
