@extends ('layout.master');

@section('table_name')
    <div class = "container-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            @foreach ($names as $name)
            <tbody>
                <tr>
                    <th scope="row">{{$name -> id}}</th>
                    <td>{{$name -> fname}}</td>
                    <td>{{$name -> mname}}</td>
                    <td>{{$name -> lname}}</td>
                    <td>
                        <a href="/form/{{$name->id}}">Update</a>
						<button name="delete_button" onclick = "deleteName('{{$name->id}}')">Delete</button>
                    </td>
                </tr>
            </tbody>
            @endforeach
    </table>
    <button type = "submit" name="update_button"><a href="form">Add New Name</a></button>

    </div>
@endsection

@section('script')
    <script>
        function deleteName(id) {
            let data = {
                _token: '{{ csrf_token() }}',
                id:id
            }
            
            if (confirm ('Are you sure to delete this data?'))
            {
                $.post ('/delete-name', data, function (result)
                {
                    if (result)
                    {
                        alert ('Delete Sucessful');
                        window.location.reload();
                    }
                })
            }
        }
    </script>
@endsection
