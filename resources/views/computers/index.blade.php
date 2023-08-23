@extends('layout')
@section('title', 'Computers')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-6 sm:justify-start sm:pt-0">
        <!-- <img src="https://img.freepik.com/premium-vector/cat-monoline-art_48832-203.jpg?w=740" alt="">                -->
        <h1>Computers</>
    </div> 
    <div class="mt-6">
        @if (count($computers) > 0)
            <ul>
                @foreach($computers as $computer)
                    <li>{{ $computer ['name'] }} is frome <strong>{{$computer['origin']}}</strong></li> 
                @endforeach
            </ul>
        @else
            <p>There are no Computers to display</p>
        @endif
    </div>                
</div>

@endsection

