@extends('layout')

@section('content')
    <main class="container py-3">
        <h1 class="text-center display-5">{{ $data['nev'] }}</h1>
        <p>
            Feltétek: {{ $data['feltet'] }}
        </p>
        <p class="fs-5">
            @if ($data['akcios'] == 1)
                <b>Ez a pizza most a készlet erejéig akciós</b>
            @else
                <b>Ez a pizza nem akciós, lehet később az lesz!</b>
            @endif
        </p>
        <p>
            Árak:
        </p>
        <ul>
            @if ($data['akcios'] == 1)
                <li>24 cm: <span style="color: red">{{ $data['ar'] }} Ft</span></li>
                <li>32 cm: <span style="color: red">{{ $data['ar'] * 1.25 }} Ft</span></li>
                <li>45 cm: <span style="color: red">{{ $data['ar'] * 1.5 }} Ft</span></li>
            @else
                <li>24 cm: <span>{{ $data['ar'] }} Ft</span></li>
                <li>32 cm: <span>{{ $data['ar'] * 1.25 }} Ft</span></li>
                <li>45 cm: <span>{{ $data['ar'] * 1.5 }} Ft</span></li>
            @endif
        </ul>

    </main>
@endsection
