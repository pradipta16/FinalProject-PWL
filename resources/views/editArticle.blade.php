@extends('layouts.master')

@section('content')
<div class="container" style="margin-top:80px">
    <h2 style="text-align: center"><b>Edit Isi Artikel</b></h2>
    <form action="/editArticle/update/{{$article->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$article->id}}"></br>
            <div class="form-group">
                <label for="title"><b>Judul</b></label>
                <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"></br>
            </div>
        <div class="form-group">
            <label for="caption"><b>Caption</b></label>
            <input type="text" class="form-control" required="required" name="caption" value="{{$article->caption}}"></br>
        </div>
        <div class="form-group">
            <label for="body"><b>Isi Artikel</b></label>
            <input type="text" class="form-control" required="required" name="body" value="{{$article->body}}"></br>
        </div>
        <div class="form-group">
            <label for="image"><b>URL Image</b></label>
            <input type="text" class="form-control" required="required" name="image" value="{{$article->image}}"></br>
        </div>
        <button type="submit" name="edit" class="btn btn-primary float-left">Ubah Data</button><br><br>
    </form>
</div>
@endsection