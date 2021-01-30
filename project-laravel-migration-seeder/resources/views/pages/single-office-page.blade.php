@extends('layouts.main-layout')

@section('content')
    
    <main>
        <h2>
            Single element
        </h2>
        <h3>
            Id: {{$officeSingle -> id}} <br>
            Name: {{$officeSingle -> name}} <br>
            Address: {{$officeSingle -> address}} <br>
            Number dependent: {{$officeSingle -> numberDependent}}
        </h3>
    </main>

@endsection