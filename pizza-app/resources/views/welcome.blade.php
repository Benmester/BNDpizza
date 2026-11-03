@extends('layout')

@section('content')
    <main class="container py-3">
        <h1 class="text-center display-5">Akciós pizzák</h1>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-4">
                    <h2><a href="{{ $item['nev'] }}">{{ $item['nev'] }}</a></h2>
                    <p>
                        {{ $item['feltet'] }}
                    </p>
                    <p>
                        <b>Akciós ár (24cm) <span style="color: red">{{ $item['ar'] }} Ft </span> </b>
                    </p>
                    <p>
                        <a href="adatlap/{{ $item['id'] }}">További méretek</a>
                    </p>
                    <hr>
                </div>
            @endforeach
        </div>
    </main>
@endsection
