@extends('layout')

@section('title' , 'create computer')

@section('content')


<div class="content ">
    <div>
        <div>
            <h1 class="head" >Create Computer</h1>
        </div>
        <div class="flex justify-center" >
            <form action="{{route('computers.store')}}" method="post" >
            @csrf
            <div>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Name" value="{{old('name')}}">
                <br>
                @error('name')
                <div class="form-error">
                    {{$message}}
                    </div>
                @enderror
            </div>

            <div>
                <label for="origin">origin</label>
                <input id="origin" type="text" name="origin" placeholder="Origin" value="{{old('origin')}}">
            </div>

            @error('origin')
            <div class="form-error">
                {{$message}}
                </div>
        @enderror

            <div>
                <label for="price">price</label>
                <input id="price" type="text" name="price" placeholder="Price" value="{{old('price')}}" >
            </div>
            @error('price')
            <div class="form-error">
                {{$message}}
                </div>
            @enderror
            <div>
                <button type="submit"> Send</button>
            </div>

        </form>
        </div>

    </div>
</div>

@endsection

