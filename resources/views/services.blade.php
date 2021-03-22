@extends('app')

@section('tittle','Services')

@section('content')

<h1>Services</h1>
<p>serve.</p>
@forelse ( $services as $service )

<li>{{$service->Name}}</li>
@empty
    <li>No services available!!</li>
@endforelse




@endsection
