@extends('layouts.master')

@section('content')     
<div class="container">
    <h2 style="text-align: center; margin-top: 8%"><b>Info User</b></h2>
    <table class="table table-bordered table-striped" style="margin-top: 2%;">
        <thead>
            <tr style="text-align: center">
                <th>No</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
        @foreach($user as $a)
            <tr style="text-align: center">
                <td>{{ $i }}</td>
                <td>{{$a->id}}</td>
                <td>{{$a->name}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->roles}}</td>
                <td><a href="manageUser/editUser/{{ $a->id }}" class="badge badge-warning">Edit</a>
                    <a href="manageUser/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a></td>
            </tr>
            @php
                $i++; 
            @endphp 
        @endforeach
        </tbody>
    </table>
    <div style="margin-top: 3%">
        <a href="manageUser/addUser" class="btn btn-primary">Tambah Data</a>
        <a href="manageUser/cetak_pdf" class="btn btn-primary">Cetak PDF</a></td><br><br>
    </div>
</div>
@endsection