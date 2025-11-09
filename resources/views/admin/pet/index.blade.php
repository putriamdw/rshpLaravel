<table border='1' cellpadding='8' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pet</th>
            <th>Tanggal Lahir</th>
            <th>Warna Tanda</th>
            <th>Jenis Kelamin</th>
            <th>Nama Pemilik</th>
            <th>Ras</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pet as $index => $pet)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pet->nama }}</td>
            <td>{{ $pet->tanggal_lahir }}</td>
            <td>{{ $pet->warna_tanda }}</td>
            <td>{{ $pet->jenis_kelamin }}</td>
            <td>{{ $pet->pemilik->user->nama }}</td>
            <td>{{ $pet->ras_hewan?->nama_ras ?? '-' }} </td>
        </tr>
        @endforeach
    </tbody>
</table>
