@extends('layouts.main-layout')

@section('content')
    
    <main>
        <h2>
            MAIN-OFFICE
        </h2>
        <ol>
            @foreach ($officeArray as $item)
                <li>
                    Nome: {{$item -> name}} <br>
                    Indirizzo: {{$item -> address}} <br>
                    Numero dipendenti: {{$item -> numberDependent}}
                </li>
                <br>
            @endforeach
        </ol>
    </main>

@endsection