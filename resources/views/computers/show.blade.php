@extends('layout')

@section('title' , 'Show Computer')

@section('content')


<div class="content ">
    <div>
        <div>
            <h1 class="head" >Computers</h1>
        </div>

        <div>
            <strong> {{ $computer['name']}}</strong> is from  <strong>{{ $computer['origin']}}</strong><br> Price is :   <strong>{{ $computer['price']}}$</strong>

        </div>
        <div>
            <a href="{{route('computers.edit', $computer['id'])}}">
            <button type="submit"> Edit </button>
            </a>
        <form class="a" action="{{route('computers.destroy', $computer['id'])}}" method="POST" >
           @csrf
            @method('DELETE')

            <button class="delete-btn" type="" >Delete</button>
        </form>
        </div>
    </div>
</div>

@endsection


