@extends('layout')

@section('content')
    <main class="container py-3">
        <h1 class="text-center display-5">Biztos töli a pizzát: {{ $data['nev'] }}?</h1>
        <p class="text-center">
            <a class="btn btn-danger fs-3" href="/del/{{ $data['id'] }}">Igen</a> &nbsp;&nbsp;
            <a class="btn btn-primary fs-3" href="/osszes">Nem</a>
        </p>
    </main>
@endsection
