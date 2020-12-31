<!DOCTYPE html>
<html>
<head>
    <title>Artikel</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 12pt;
        }
    </style>
    <center>
        <h3><u>TRAVEL ARTICLE</u></h3><br>
    </center>

    <table rules="all">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Caption</th>
                <th>Isi Artikel</th>
            </tr>
        </thead>
        <tbody>
            @php 
                $i=1 
            @endphp
            @foreach($article as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->title}}</td>
                <td>{{$a->caption}}</td>
                <td>{{$a->body}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>