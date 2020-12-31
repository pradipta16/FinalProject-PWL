@extends('layouts.master')

@section('content')
<div class="container">
    <h2 style="text-align: center; margin-top: 8%"><b>Info Artikel</b></h2>
    <table class="table table-bordered table-striped" style="margin-top: 2%;">
        <thead>
            <tr style="text-align: center">
                <th>No</th>
                <th>Judul</th>
                <th>Caption</th>
                <th>Action</th>
            </tr>
            </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
        @foreach($article as $a)
            <tr style="text-align: center">
                <td>{{ $i }}</td>               
                <td style="text-align: left">{{$a->title}}</td>
                <td style="text-align: left">{{$a->caption}}</td>
                <td>
                <a href="manage/editArticle/{{ $a->id }}" class="badge badge-warning">Edit</a>
                <a href="manage/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
            @php
            $i++; 
            @endphp 
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 3%">
        <a href="manage/addArticle" class="btn btn-primary" style="margin-bottom: 4%">Tambah Data</a>
        <a href="manage/cetak_pdf" class="btn btn-primary" style="margin-bottom: 4%">Cetak PDF</a></td>
    </div>
</div>
@endsection