@extends('layout')

@section('title' , 'Edit computer')

@section('content')


<div class="content ">
    <div>
        <div>
            <h1 class="head" >Edit Old Computer</h1>
        </div>
        <div class="flex justify-center" >
            <form action="{{route('computers.update' , ['computer'=>$computer['id']])}}" method="POST" >
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Name" value="{{ $computer->name }}">
                <br>
                @error('name')
                <div class="form-error">
                    {{$message}}
                    </div>
                @enderror
            </div>

            <div>
                <label for="origin">origin</label>
                <input id="origin" type="text" name="origin" placeholder="Origin" value="{{ $computer['origin'] }}">
            </div>

            @error('origin')
            <div class="form-error">
                {{$message}}
                </div>
        @enderror

            <div>
                <label for="price">price</label>
                <input id="price" type="text" name="price" placeholder="Price" value="{{ $computer['price'] }}" >
            </div>
            @error('price')
            <div class="form-error">
                {{$message}}
                </div>
            @enderror
            <div>
                <button type="submit"> Submit</button>
            </div>

        </form>
        </div>

    </div>
</div>

@endsection

