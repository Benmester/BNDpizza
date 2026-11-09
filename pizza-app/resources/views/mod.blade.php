@extends('layout')

@section('content')
    <main class="container py-3">
        <h1 class="text-center display-5">{{ $data['nev'] }} módosítása</h1>

        <form action="/mod/{{ $data['id'] }}" method="post">
            @csrf
            <div class="card w-50 mx-auto mt-4">
                <div class="card-body">
                    <label class="form-label" for="nev">Pizza neve</label>
                    <input class="form-control" type="text" name="nev" id="nev"
                        value="{{ old('nev', $data['nev']) }}">
                    @error('nev')
                        <p class="danger">{{ $message }}</p>
                    @enderror

                    <label class="form-label mt-2" for="feltet">Pizza feltétei</label>
                    <input class="form-control" type="text" name="feltet" id="feltet"
                        value="{{ old('feltet', $data['feltet']) }}">
                    @error('feltet')
                        <p class="danger">{{ $message }}</p>
                    @enderror

                    <label class="form-label mt-2" for="ar">Pizza ára</label>
                    <input class="form-control" type="number" name="ar" id="ar" min="0"
                        value="{{ old('ar', $data['ar']) }}">
                    @error('ar')
                        <p class="danger">{{ $message }}</p>
                    @enderror

                    <div class="mt-2">
                        <input class="form-check-input" type="checkbox" name="akcios" id="akcios"
                            @if ($data['akcios'] == 1) checked @endif>
                        <label class="form-check-label" for="akcio">Akciós</label>
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Adatok módosítása</button>
                </div>
            </div>
        </form>
    </main>
@endsection
