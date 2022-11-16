<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <p>Very cool</p>
    <p>Test = {{ $test }}</p>
    
    @foreach($somemovies as $movie)
        <p>{{$movie}}</p>
    @endforeach
    
</div>