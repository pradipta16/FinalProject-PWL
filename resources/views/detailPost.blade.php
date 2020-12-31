@extends('layouts.master')

@section('section')
    <div class="container">
      <div class="jumbotron mt-4">
        <tr style="text-align: justify">
          <td><h1>{{$article -> title}}</h1></td>
          <td><i><b>{{$article -> caption}}</b></i></td><br><br>
          <td style="text-align: justify">{{$article -> body}}</td>
        </tr>
      </div>
    </div>
@endsection