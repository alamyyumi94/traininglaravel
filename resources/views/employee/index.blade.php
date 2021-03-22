@extends('app')

@section('tittle','Employee')

@section('content')


<form action="/employee" method="POST">
    <input type="text" name="Name" id="" autocomplete="off">
    <input type="text" name="Email" id="" autocomplete="off">

    @csrf

    <button>Add New Employee</button>
    </form>
   <p style="color: red">@error('Name'){{$message}}@enderror</p>
   <p style="color: red">@error('Email'){{$message}}@enderror</p>
<ul></ul>
@forelse ($employee as $data )


    <li>{{$data->Name}}</li>
    @empty
    <li>Pening ah</li>
@endforelse
</ul>

<a href="/employee/create">Create</a>



@endsection
