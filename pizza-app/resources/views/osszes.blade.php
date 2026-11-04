@extends('layout')

@section('content')
    <main class="container py-3">
        <h1 class="text-center display-5">Összes pizza</h1>
        <p>
            <b>Rendezés: </b>
            <a href="/osszes/abc">Név szerint növekvő </a>
            <a href="/osszes/cba">Név szerint csökkenő </a>
            <a href="">Ár szerint növekvő </a>
            <a href="">Ár szerint csökkenő</a>
        </p>
        <table class="table table-striped">
            <tr>
                <th>Név</th>
                <th>Feltét</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td><a href="/adatlap/{{ $item['id'] }}">{{ $item['nev'] }}</a></td>
                    <td>{{ $item['feltet'] }}</td>
                    @if ($item['akcios'] == 1)
                        <td><b><span style="color: red">{{ $item['ar'] }} Ft</span></b></td>
                        <td><b><span style="color: red">{{ $item['ar'] * 1.25 }} Ft</span></b></td>
                        <td><b><span style="color: red">{{ $item['ar'] * 1.5 }} Ft</span></b></td>
                        <td><b><span style="color: red">Akciós!!</span></b></td>
                    @else
                        <td>{{ $item['ar'] }} Ft</td>
                        <td>{{ $item['ar'] * 1.25 }} Ft</td>
                        <td>{{ $item['ar'] * 1.5 }} Ft</td>
                        <td></td>
                    @endif
                </tr>
            @endforeach
        </table>
    </main>
@endsection
