@extends('layouts.main')


@section('content')

<div class="container">
    

    <ul>
        @foreach ($movies as $movie )
            <li>{{ $film }}</li>
        @endforeach
    </ul>

</div>

@endsection