@extends('layouts.app')
	@section('content')
    
    <h1>Showing Record of: 
        @foreach ($citizen as $info)
        {{$info->fullname}}
        @endforeach
    </h1>

    <hr />
    
            @foreach ($citizen as $info)
             <b>Name: </b>       {{$info->fullname}}<br />
             <b>Gender: </b>       {{$info->gender}} <br />
             <b>State: </b>       State <br />
             <b>LGA: </b>      LGA <br />
             <b>Ward: </b>     Ward <br />
            @endforeach
    
	@endsection