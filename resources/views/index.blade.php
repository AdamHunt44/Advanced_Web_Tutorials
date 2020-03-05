<body>
<table class="table is-striped is-hoverable">
    <thead>
    <th>User</th>
    <th>Comments</th>
    <th>Date</th>
    <th>Likes</th>
    </thead>
    <tbody>
    @foreach ($comments as $c)
        <tr>
            <td>{{ $c -> name }}</td>
            <td>{{ $c -> comment }}</td>
            <td>{{ $c -> created_at -> format('D jS F') }}</td>
            <td>{{ $c -> likes }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
