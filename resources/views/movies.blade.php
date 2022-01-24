@extends('layouts.main')


@section('content')

<div class="container ">
   
       
       {{-- <ul class="cards">
           @foreach ($movies as $movie )
               <li class="card">{{ $movie }}</li>
           @endforeach
       </ul> --}}
       <table>
        <thead>
            <tr>
              <th>id</th>
              <th>title</th>
              <th>original_title</th>
              <th>nationality</th>
              <th>date</th>
              <th>vote</th>
            </tr>
        </thead>   
        <tbody>
            @forelse ($movies as $movie )
            <tr>
    
                <td>{{$movie->id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->original_title}}</td>
                <td>{{$movie->nationality}}</td>
                <td>{{$movie->date}}</td>
                <td>{{$movie->vote}}</td>
                
            </tr>
            @empty
                <h3>nessun risultato trovato</h3>
            @endforelse
        </tbody>
      </table>
    

</div>

@endsection