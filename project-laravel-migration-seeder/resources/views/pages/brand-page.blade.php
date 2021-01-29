@extends('layouts.main-layout')

@section('content')
    
    <main>
        <h2>
            MAIN-BRAND
        </h2>
        <ul>
            @foreach ($brandArray as $item)
                <li>
                    Nome: {{$item -> name}} <br>
                    Indirizzo: {{$item -> logo}} <br>
                    Numero dipendenti: {{$item -> numberOffice}}
                </li>
                <br>
            @endforeach
        </ul>
    </main>

@endsection