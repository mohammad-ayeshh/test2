@extends('layout')
@section('content')

@section('title','computers')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div class="flex justfiy-center pt-8 ">

<h1>Create a new computers</h1>

</div>
<div class="flex justify-center">
<form action="{{route('computers.store')}}" method="post">
    @csrf
     <div>
     <label for="computer-name">Computer Name </label>
     <input id= "computer-name" name= "computer-name" value="{{old('computer-name')}}" type= "text">
    @error('computer-name')
    <div class="form-error">
        {{$message}}
    </div>
    @enderror 
    </div>

     <div>
     <label for="computer-price">Computer price </label>
     <input id= "computer-price" name= "computer-price" value="{{old('computer-price')}}" type= "text">
     @error('computer-price')
     <div class="form-error">
         {{$message}}
     </div>
     @enderror 
    </div>
<div>
    <button type="submit">Submit</button>
</div>
</form>

</div>

</div>

@endsection