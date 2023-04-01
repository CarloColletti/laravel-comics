@extends('layouts.app')

@section('main-content')

  <main class="detail-comic">

    {{-- description and title  --}}
    <section>
      {{-- blue bar and comic image  --}}
      <div class="back-blue">
        <div class="container position-relative">
          <img src="{{ $comic['thumb'] }}" class="comic-photo" alt="comic-photo">
        </div>
  
      </div>
  
      {{-- comic info  --}}
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-8">
            <div class="container">
  
              {{-- title  --}}
              <div class="row pt-5 pb-3">
                <h1 class="fw-bold p-0">
                  {{ $comic['title'] }}
                </h1>
              </div>
  
              {{-- detail price --}}
              <div class="row border-bottom text-box-green py-3">
                <div class="col-9 d-flex justify-content-between px-4 border-end">
                  <span class="fw-bold">
                    <span class="text-muted">
                      U.S. Price:
                    </span>
                    <span class="text-white">
                      {{ $comic['price'] }}
                    </span>
                  </span>
  
                  <span class="fw-bold text-muted">
                    AVAILABLE
                  </span>
                </div>
  
                <div class="col-3 text-center">
                  <span class="fw-bold text-white">
                    Check Availability
                  </span>
                </div>
              </div>
            </div>
  
            {{-- description  --}}
            <div class="row py-3">
              <p class="text-muted fw-semibold fs-5">
                {{ $comic['description'] }}
              </p>
            </div>
          </div>
  
          <div class="col-4 pt-5 pb-3">
            {{-- adv --}}
            <div class="text-end">
              <span class="fw-bold">
                Advertisement
              </span>
            </div>
            {{-- image-adv --}}
            <div>
              <img src="{{ Vite::asset('resources/img/adv.jpg') }}" class="img-fluid w-100" alt="adv">
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Talent & Specs  --}}

    <section class="py-5">
      <div class="container">
        <div class="row">
          {{-- talent  --}}
          <div class="col-6">
            <h2>
              Talent
            </h2>
            <div class="container">
              {{-- art by  --}}
              <div class="row py-3">
                <div class="col-3">
                  <span>
                    Art By:
                  </span>
                </div>
                {{-- name artist  --}}
                <div class="col-9">
                  @foreach($comic['artists'] as $artist )
                    <span>{{ $artist }}, </span>
                  @endforeach
                </div>
              </div>
    
              {{-- Written by  --}}
              <div class="row py-3">
                <div class="col-3">
                  <span>
                    Written By:
                  </span>
                </div>
                {{-- name artist  --}}
                <div class="col-9">
                  @foreach($comic['writers'] as $artist )
                    <span>{{ $artist }}, </span>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
    
          {{-- Specs --}}
          <div class="col-6">
            <h2>
              Specs
            </h2>
            <div class="container">
              {{-- Series  --}}
              <div class="row py-2">
                <div class="col-3">
                  <span>
                    Series:
                  </span>
                </div>
                <div class="col-9">
                  <span>{{ $comic['series'] }}, </span>
                </div>
              </div>
    
              {{-- U.S. Price  --}}
              <div class="row py-2">
                <div class="col-3">
                  <span>
                    U.S. Prise:
                  </span>
                </div>
                <div class="col-9">
                  <span>{{ $comic['price'] }}, </span>
                </div>
              </div>
    
              {{-- On Sale Date  --}}
              <div class="row py-2">
                <div class="col-3">
                  <span>
                    On Sale Date:
                  </span>
                </div>
                <div class="col-9">
                  <span>{{ $comic['sale_date'] }}, </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


  </main>

@endsection