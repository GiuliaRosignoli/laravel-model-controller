<!--Home -->
@extends('./layouts/main')
@section('content')
    <div class="container">
        <h2>Film Database</h2>
        <div class="card flex">
            @foreach ($movies as $movie)
            <ul>
                <li>ID: {{ $movie->id}}</li>
                <li>Title: {{ $movie->title }}</li>
                <li>Original Title: {{ $movie->original_title }}</li>
                <li>Nationality: {{ $movie->nationality }}</li>
                <li>Date: {{ $movie->date }}</li>
                <li>Vote: {{ $movie->vote }}</li>
            </ul>
         @endforeach
        </div>
    </div>
@endsection