<!DOCTYPE html>
<html>
<head>
    <title>User Info</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 12pt;
            tabl
        }
    </style>
    <center>
        <h3><u>USERS DATA</u></h3><br> 
    </center>

    <div class="table-responsive-xl">    
        <table class="table" rules="all" width="705px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Roles</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $i=1 
                @endphp
                @foreach($user as $a)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$a->id }}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->roles}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</body>
</html>