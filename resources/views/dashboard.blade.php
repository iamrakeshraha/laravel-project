<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    {{-- {{ $registrations }} --}}
    <div class="text-right">
        <a href="{{ Route('customer.create') }}"> {{-- "customer.create" is a name of a create page route --}}
            <button type="button" class="btn btn-info center">Add</button></a>
    </div>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Token</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registrations as $key => $user)
                <tr>
                    <td scope="row"></td>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['password'] }}</td>
                    <td>{{ $user['_token'] }}</td>
                    <td>
                        <a href="{{ url('dashboard/update') }}/{{ $user->id }}">
                            <button class="btn btn-warning">Update</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('customer.delete', [($id = $user['id'])]) }}">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
