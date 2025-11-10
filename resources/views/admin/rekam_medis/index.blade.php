<table border='1' cellpadding='8' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>Dibuat pada</th>
            <th>Nama Pet</th>
            <th>Anamnesa</th>
            <th>Temuan Klinis</th>
            <th>Diagnosa</th>
            <th>Terapi</th>
            <th>Dokter Pemeriksa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rekam_medis as $index => $rm)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $rm->created_at }}</td>
            <td>{{ $rm->pet?->nama?? '-' }}</td>
            <td>{{ $rm->anamnesa }}</td>
            <td>{{ $rm->temuan_klinis }}</td>
            <td>{{ $rm->diagnosa }}</td>
            <td>{{ $rm->terapi }}</td>
            <td>{{ $rm->dokter_pemeriksa }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
