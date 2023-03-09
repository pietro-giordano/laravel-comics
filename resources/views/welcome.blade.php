@extends('layouts.main')

@section('comics')
      <div class="jumbotron">
      </div>

      <div class="container">
            <div class="current-button">
                  <button>
                        current series
                  </button>
            </div>

            <div class="card-container">
                  @foreach ($comics as $comic)
                        <div class="card">
                              <img src="{{ Vite::asset($comic['thumb']) }}" alt="{{ $comic['series'] }}">
                              <p>{{ $comic['series'] }}</p>
                        </div>   
                  @endforeach
            </div>

            <div class="load-button">
                  <button>
                        load more
                  </button>
            </div>
      </div>
@endsection