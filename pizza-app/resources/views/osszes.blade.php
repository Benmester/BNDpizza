@extends('layout')

@section('content')
    <main class="container py-3">
        @if (session('msg'))
            <div class="alert alert-succes">
                {{ session('msg') }}
            </div>
        @endif
        {{-- menőbb megoldás
            @session('msg')
                <div class="alert alert-succes">
                    {{ session('msg') }}
                </div>
            @endsession
        --}}
        <h1 class="text-center display-5">Összes pizza</h1>
        <p>
            <b>Rendezés: </b>
            <a href="/osszes/abc">Név szerint növekvő</a> &nbsp;
            <a href="/osszes/cba">Név szerint csökkenő</a> &nbsp;
            <a href="/osszes/123">Ár szerint növekvő</a> &nbsp;
            <a href="/osszes/321">Ár szerint csökkenő</a> &nbsp;
        </p>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Név</th>
                <th>Feltét</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td><a href="/adatlap/{{ $item['id'] }}">{{ $item['nev'] }}</a></td>
                    <td>{{ $item['feltet'] }}</td>
                    @if ($item['akcios'] == 1)
                        <td>
                            <b><span style="color: red">{{ number_format($item['ar'], 0, ',', ' ') }} Ft</span></b>
                        </td>
                        <td>
                            <b><span style="color: red">{{ number_format($item['ar'] * 1.25, 0, ',', ' ') }} Ft</span></b>
                        </td>
                        <td>
                            <b><span style="color: red">{{ number_format($item['ar'] * 1.5, 0, ',', ' ') }} Ft</span></b>
                        </td>
                        <td>
                            <b><span style="color: red">Akciós!!</span></b>
                        </td>
                    @else
                        <td>{{ number_format($item['ar'], 0, ',', ' ') }} Ft</td>
                        <td>{{ number_format($item['ar'] * 1.25, 0, ',', ' ') }} Ft</td>
                        <td>{{ number_format($item['ar'] * 1.5, 0, ',', ' ') }} Ft</td>
                        <td></td>
                    @endif
                    <td><a class="link-info" href="/mod/{{ $item['id'] }}">Módosítás</a></td>
                    <td><a class="link-danger" href="/alert/{{ $item['id'] }}">Törlés</a></td>
                </tr>
            @endforeach
        </table>
    </main>
@endsection
