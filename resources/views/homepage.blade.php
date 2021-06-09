<!--Home -->
@extends('./layouts/main')
@section('content')
    <div class="container">
        <h2>Film Database</h2>
        <div class="card">
            @foreach ($movies as $movie)
            <ul>
                <li>{{ $movie->id}}</li>
                <li>{{ $movie->title }}</li>
                <li>{{ $movie->original_title }}</li>
                <li>{{ $movie->nationality }}</li>
                <li>{{ $movie->date }}</li>
                <li>{{ $movie->vote }}</li>
            </ul>
         @endforeach
        </div>
    </div>
@endsection