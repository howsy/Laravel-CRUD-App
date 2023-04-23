
@extends('layout')

@section('title')
Computers
@endsection

@section('content')

<div class="content ">
    <div>
        <div>
            <h1 class="head">Computers</h1>
        </div>

        <div>
            @if (isset($computers))


            <ul>
                @foreach ( $computers as $computer )
         <a href="{{route('computers.show',['computer'=>$computer['id']])}}" class="C-style" >
                <li class="C-style">
                    <strong> {{ $computer['name']}}</strong> is from  <strong>{{ $computer['origin']}}</strong> Price-  <strong>{{ $computer['price']}}$</strong>
                </li>
                @endforeach
            </ul>
        </a>
            @else
            <span>There is no Computers</span>
            @endif
        </div>
    </div>
</div>
@endsection
