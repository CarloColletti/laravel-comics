<header>
  <div class="bg-my-blue">
    <div class="container">
      <div class="additional-links">
        <span>
          <a href="#">
            DC POWERS VISA®
          </a>
        </span>
  
        <span>
          <a href="#">
            ADDITIONAL DC SITES
          </a>
        </span>
      </div>
    </div>

  </div>
  <div class="container">

    <div class="d-flex py-4">
      {{-- logo  --}}
      <div>
        <a href="{{ route('homepage') }}">
          <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Loco">
        </a>
      </div>

      {{-- links --}}
      <ul class="d-flex justify-content-between align-items-center m-0">
      
        <li><a href="#">CHARACTERS</a></li>
        <li><a href="#">COMICS</a></li>
        <li><a href="#">MOVIES</a></li>
        <li><a href="#">TV</a></li>
        <li><a href="#">GAMES</a></li>
        <li><a href="#">COLLECTIBLES</a></li>
        <li><a href="#">VIDEOS</a></li>
        <li><a href="#">FANS</a></li>
        <li><a href="#">NEWS</a></li>
        <li><a href="#">SHOP</a></li>
      </ul>

      {{-- search bar  --}}
      <div class="d-flex align-items-center">
        <input type="search">

      </div>


    </div>




  </div>



</header>