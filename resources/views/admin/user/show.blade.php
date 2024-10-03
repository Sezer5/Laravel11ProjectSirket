<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">

<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $data->email }}</td>
    </tr>
    <tr>
        <td>Role</td>
        <td>
            @foreach($data->roles as $role)
                {{$role->name}}<br>
            @endforeach
        </td>
    </tr>
    <tr>
        <td>Password</td>
        <td>{{$data->password}}</td>
    </tr>
</table>
