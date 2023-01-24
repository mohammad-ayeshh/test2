@extends('layout')
@section('content')

@section('title','computers')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
<div class="flex justfiy-center pt-8 ">

<h1>computers </h1>

</div>
<div class="mt-8">
    @if (count($computers) > 0)
<ul>
    @foreach ($computers as $computer)
<li>
    <a href="{{route('computers.show',['computer' => $computer['id']]) }}">

    {{ $computer ['id'] }} {{ $computer ['name'] }}
    
    </a>
</li>
@endforeach
    </ul>
    @else 
    <p>There are no computers </p>
    @endif
</div>
</div>

@endsection