@extends('layouts.main')

@section('main')
    <main>
            <div class="jumbotron">
            </div>

            <div class="container">
                  <div class="current-button">
                        <button>
                              current series
                        </button>
                  </div>

                  <div class="card-container">
                        {{-- <AppCard v-for="card in comics" class="card" :series="card.series" :thumb="card.thumb" /> --}}
                        <div>
                              <img :src="thumb" :alt="series">
                              {{-- <p>{{ series }}</p> --}}
                        </div>
                  </div>

                  <div class="load-button">
                        <button>
                              load more
                        </button>
                  </div>
            </div>
      </main>
@endsection