@extends('layouts.main-layout')

@section('content')
    
    <main>
        <h2>
            MAIN-BRAND
        </h2>
        <ol>
            @foreach ($brandArray as $item)
                <li>
                    <a href="{{route('brand-show', $item -> id)}}">
                        Name: {{$item -> name}}
                    </a>
                </li>
                <br>
            @endforeach
        </ol>
    </main>

@endsection