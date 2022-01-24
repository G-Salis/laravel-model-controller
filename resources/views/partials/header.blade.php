<header class="container py-5">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">HOME</a>
    </li>
    <li class="nav-item {{(Route::currentRouteName() === 'about') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('about')}}">About</a>
    </li>
    <li class="nav-item {{(Route::currentRouteName() === 'movie') ? 'active' : '' }}">
      <a class="nav-link" href="{{route('movie')}}">Movie</a>
    </li>
  </ul>
</header>