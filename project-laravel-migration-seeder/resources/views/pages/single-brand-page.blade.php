@extends('layouts.main-layout')

@section('content')
    
    <main>
        <h2>
            MAIN-BRAND
        </h2>
        <h3>
            Id: {{$brandSingle -> id}} <br>
            Name: {{$brandSingle -> name}} <br>
            Number Offices: {{$brandSingle -> numberOffice}} <br>
            Logo: {{$brandSingle -> logo}}
        </h3>
    </main>

@endsection