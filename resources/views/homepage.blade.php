@extends('layouts.app')

@section('page-name')
  Home
@endsection

@section('jumbotron')
<div class="">
  <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" class="jumbotron img-fluid" alt="jumbotron-teen-titans">
</div>
@endsection

@section('main-content')
  <main class="py-5">
    <div class="container">
      <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6">
        @foreach ($comics as $comic)
            <div class="col border border-primary gap-3 g-3">
              <div class="border border-danger max-height">
                <div class="image-cover">
                  <img src="{{$comic['thumb'] }}" class="img-fluid" alt="">
                </div>
                <div>
                  <h5>
                    {{ $comic['title'] }}
                  </h5>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection

