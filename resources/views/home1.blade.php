@extends('layouts.master')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home.jpg')" >
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1 style="font-family: Brush Script MT" style="font-size: 50%">Diary & Journal</h1>
            <span class="subheading"><i><b>“Orang boleh pandai setinggi langit, tapi selama ia tidak menulis, 
              ia akan hilang di dalam masyarakat dan dari sejarah. Menulis adalah bekerja untuk keabadian”</b> </i></span>
            <p><b>- Pramoedya Ananta Toer</b></p>  
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col text-left">
          <h1 style="text-align: center">Artikel</h1>
        </div>
    </div>
    
  <div class="container" style="margin-top: 3%; margin-bottom: 5%">  
    <div class="row col-md-12">   
      <div class="card-group ">
        @foreach($article as $a)            
        <div class="card mr-5">
          <img class="card-img-top" src={{$a -> image}} alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$a -> title}}</h5>
            <p class="card-text">{{$a -> caption}}</p>
            <a href="/article/{{$a->id}}" class="btn btn-primary">Read more</a>
          </div>
        </div>      
        @endforeach
      </div>
    </div>
  </div>  
 @endsection
 