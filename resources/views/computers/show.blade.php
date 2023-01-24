@extends('layout')
@section('content')

@section('title','computers')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div class="flex justfiy-center pt-8 ">

<h1>computers </h1>

</div>
<div class="mt-8">

    <h3> {{ $computer ['name'] }} {{ $computer ['price'] }}</h3>
    
</div>

<a class="edit-btn" href="{{route('computers.edit',$computer->id)}}">edit</a>

<form action="{{route('computers.destroy',$computer->id)}}" method="post">
    @csrf
    @method('DELETE')
    <input class="delete-btn" type="submit"  value="delete">

</form>



</div>

@endsection