@extends('layouts.master')

@section('content')
<link href="css/clean-blog.min.css" rel="stylesheet">
    <div class="container">
        <form action="/addArticle/create" method="post" enctype="multipart/form-data" style="margin-top:70px;">
        @csrf
        <h2 style="text-align: center"><b>Masukkan Data Artikel</b></h2>
        <div class="form-group">
            <label for="title"><b>Judul</b></label>
            <input type="text" class="form-control" required="required" name="title"></br>
        </div>
        <div class="form-group">
            <label for="caption"><b>Caption</b></label>
            <input type="text" class="form-control" required="required" name="caption"></br>
            </div>
        <div class="form-group">
            <label for="body"><b>Isi Artikel</b></label>
            <input type="text" class="form-control" required="required" name="body"></br>
        </div>
        <div class="form-group">
            <label for="image"><b>URL Image</b></label>
            <input type="text" class="form-control" required="required" name="image"></br>
            <button type="submit" name="addArticle/create" class="btn btn-primary float-left" style="margin-bottom: 4%">Tambah Data</button><br><br>
        </div>        
    </form>    
    </div>
@endsection