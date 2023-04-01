@extends('layouts.app')

@section('page-name')
  Home
@endsection

@section('main-content')
  <main class="py-5 main-home">
    {{-- comics  --}}
    <section>
      <div class="container position-relative">
        <div class="current-series">
          <span>CURRENT SERIES</span>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-5">
          @foreach ($comics as $comic)
            <div class="col">
              <a href="#">
                <div class="max-height">
                  <div class="image-cover">
                    <img src="{{$comic['thumb'] }}" class="img-fluid" alt="">
                  </div>
                  <div class="pt-2">
                    <h5>
                      {{ $comic['title'] }}
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
      {{-- load-more  --}}
      <div class="load">
        <span class="fw-bold">LOAD MORE</span>
      </div>
    </section>
  </main>
  @include('partials._linkshome')
@endsection

