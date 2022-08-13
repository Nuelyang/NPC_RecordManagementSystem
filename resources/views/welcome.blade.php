@extends('layouts.app')
	@section('content')
    
    <table class="table">
        <thead>
        
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
            </tr>
            </thead>
            <tbody>

        @foreach ($citizens as $citizen)
            <tr>
                <th scope="row">{{$citizen->id}}</th>
                <td><a href="{{url('/info')}}/{{$citizen->id}}">{{$citizen->fullname}}</a></td>
                <td>{{$citizen->gender}}</td>
            </tr>
        @endforeach
          

        </tbody>
      </table>
	@endsection