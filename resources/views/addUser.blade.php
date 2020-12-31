@extends('layouts.master')

    
@section('content')
<div class="container" style="padding-top: 70px" >
    <div class="textCake" style="padding-top: 10px">
        <h2 style="text-align: center">Masukkan Data</h2>
    </div>
    <form action="/manageUser/create" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" required="required" name="name"></br>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" class="form-control" required="required" name="email"></br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" required="required" name="password"></br>
        </div>
        <div class="form-group">
            <label for="roles">Roles</label>
            <input type="text" class="form-control" required="required" name="roles"></br>
            <button type="submit" name="add" class="btn btn-info float-left" style="margin-bottom: 90px">Tambah Data</button><br><br>
        </div>        
    </form>
</div>
