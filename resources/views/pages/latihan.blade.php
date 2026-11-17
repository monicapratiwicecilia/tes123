@extends('layouts.master')

@section('content')
    <h2>Daftar Mata Kuliah</h2>

    <ul class = "row">
        @foreach ($matakuliah as $matkul)
            <li class = "row">
                {{ $matkul }}</li>
        @endforeach
    </ul>

    <button type="button" class="btn btn-warning">
        Edit
    </button>
@endsection
