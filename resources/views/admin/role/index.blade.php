<table border='1' cellpadding='8' cellspacing='0'>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($role as $index => $role)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $role->nama_role}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
