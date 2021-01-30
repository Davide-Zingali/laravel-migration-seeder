@extends('layouts.main-layout')

@section('content')
    
    <main>
        <h2>
            MAIN-OFFICE
        </h2>
        <ol>
            @foreach ($officeArray as $item)
                <li>
                    <a href="{{route('office-show', $item -> id)}}">
                        Nome: {{$item -> name}}
                    </a>
                </li>
                <br>
            @endforeach
        </ol>
    </main>

@endsection