<table>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.show', $user->id) }}">View</a>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
            <a href="{{ route('users.delete', $user->id) }}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $users->links() }}
