<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <!-- <link rel="dns-prefetch" href="//fonts.bunny.net"> -->
  <!-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="/img/logo.svg" alt="logo" />
        </a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

        <div class="navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/message') }}">메세지</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/credit') }}">크레딧</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <!-- Authentication Links -->
          <!-- <ul class="navbar-nav ms-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul> -->
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>

    <footer>
      <nav class="navbar navbar-expand-md">
        <div class="container">
          <a class="navbar-logo" href="{{ url('/') }}">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="205.41" height="63.624"
              viewBox="0 0 205.41 63.624">
              <g id="그룹_49948" data-name="그룹 49948">
                <g id="그룹_49946" data-name="그룹 49946">
                  <path id="패스_50539" data-name="패스 50539"
                    d="M125.53,24.32a9.76,9.76,0,0,0-9.76,9.76v8.2a2.91,2.91,0,0,0,5.82,0V34.25a3.909,3.909,0,0,1,3.91-3.91h.04a3.922,3.922,0,0,1,3.91,3.91v8.03a2.91,2.91,0,0,0,5.82,0v-8.2a9.765,9.765,0,0,0-9.76-9.76Z"
                    fill="#ededed" />
                  <path id="패스_50540" data-name="패스 50540"
                    d="M194.95,24.2a10.46,10.46,0,1,0,10.46,10.46A10.456,10.456,0,0,0,194.95,24.2Zm0,15.12a4.67,4.67,0,1,1,4.67-4.67A4.669,4.669,0,0,1,194.95,39.32Z"
                    fill="#ededed" />
                  <path id="패스_50541" data-name="패스 50541"
                    d="M155.82,14.62a2.891,2.891,0,0,0-2.89,2.89v7.83a10.454,10.454,0,1,0,5.79,9.37h0V17.52a2.894,2.894,0,0,0-2.9-2.89Zm-7.56,24.73a4.67,4.67,0,1,1,4.67-4.67A4.669,4.669,0,0,1,148.26,39.35Z"
                    fill="#ededed" />
                  <path id="패스_50542" data-name="패스 50542"
                    d="M181.79,32.26a10.461,10.461,0,1,0-10.25,12.83,4.405,4.405,0,0,1,4.49,4.15,4.469,4.469,0,0,1-4.67,4.16,4.728,4.728,0,0,1-4.24-2.42,3.032,3.032,0,0,0-1.9-1.66,2.847,2.847,0,0,0-3.23,4.08,10.643,10.643,0,0,0,9.36,5.17c5.77,0,10.46-4.18,10.46-9.33a8.831,8.831,0,0,0-3.3-6.78,10.469,10.469,0,0,0,3.27-10.2Zm-10.93,6.99a4.669,4.669,0,1,1,5.35-5.35A4.693,4.693,0,0,1,170.86,39.25Z"
                    fill="#ededed" />
                  <path id="패스_50543" data-name="패스 50543"
                    d="M181.64,21.93a2.6,2.6,0,1,0,2.6,2.6A2.6,2.6,0,0,0,181.64,21.93Z" fill="#ededed" />
                  <path id="패스_50544" data-name="패스 50544"
                    d="M110.76,26.81a8.862,8.862,0,0,0-2.9-1.84,10.784,10.784,0,0,0-7.47.02A8.787,8.787,0,0,0,95.2,30.2a11.983,11.983,0,0,0-.76,4.39,12.7,12.7,0,0,0,.77,4.53,9.244,9.244,0,0,0,2.23,3.36,9.368,9.368,0,0,0,3.46,2.04,14.68,14.68,0,0,0,7.05.41,9.684,9.684,0,0,0,2.24-.7,4.729,4.729,0,0,0,1.63-1.16,2.617,2.617,0,0,0,.67-1.35,2.437,2.437,0,0,0,.05-.48,2.106,2.106,0,0,0-2.01-2.19,1.872,1.872,0,0,0-.87.22h0a10.145,10.145,0,0,1-1.46.66,7.879,7.879,0,0,1-2.72.46,6.293,6.293,0,0,1-3.59-.94,4.168,4.168,0,0,1-1.54-2l10.48-1.51a3.316,3.316,0,0,0,1.77-.81,2.633,2.633,0,0,0,.71-1.98,9.317,9.317,0,0,0-.66-3.53,8.186,8.186,0,0,0-1.89-2.82Zm-10.79,6.1a4.629,4.629,0,0,1,1.19-2.67,4.031,4.031,0,0,1,3.01-1.21,3.388,3.388,0,0,1,2.66.97,3.912,3.912,0,0,1,.96,1.79L99.97,32.9Z"
                    fill="#ededed" />
                  <path id="패스_50545" data-name="패스 50545"
                    d="M85.45,32.31l-2.24-.58a3.165,3.165,0,0,1-1.38-.58.779.779,0,0,1-.24-.62.844.844,0,0,1,.49-.79,4.122,4.122,0,0,1,2.07-.43,7.89,7.89,0,0,1,2.63.44c.26.1.5.19.73.28l.18.07h0a2.448,2.448,0,0,0,.97.21,2.346,2.346,0,0,0,2.37-2.32,2.264,2.264,0,0,0-.5-1.41h0l-.13-.17a.549.549,0,0,0-.07-.09,4.394,4.394,0,0,0-1.61-1.14,9.686,9.686,0,0,0-2.16-.64,14.824,14.824,0,0,0-2.69-.23,11.8,11.8,0,0,0-3.34.44,7.714,7.714,0,0,0-2.55,1.27,5.518,5.518,0,0,0-1.62,2.02,5.8,5.8,0,0,0-.55,2.48,5.236,5.236,0,0,0,1.51,3.92,9.5,9.5,0,0,0,4.24,2.11l2.63.7a3.4,3.4,0,0,1,1.48.68,1.088,1.088,0,0,1,.34.87,1.053,1.053,0,0,1-.51.96,4.068,4.068,0,0,1-2.16.45,7.412,7.412,0,0,1-2.88-.51c-.46-.19-.89-.4-1.3-.61a2.439,2.439,0,0,0-2.84,3.82.549.549,0,0,0,.07.09,5.216,5.216,0,0,0,1.7,1.23,10.063,10.063,0,0,0,2.39.73,16.789,16.789,0,0,0,2.93.24,9.97,9.97,0,0,0,6.12-1.64,5.68,5.68,0,0,0,2.28-4.76,5.49,5.49,0,0,0-1.67-4.19,10.967,10.967,0,0,0-4.7-2.3Z"
                    fill="#ededed" />
                </g>
                <g id="그룹_49947" data-name="그룹 49947">
                  <path id="패스_50546" data-name="패스 50546"
                    d="M28.28,0H7.74A7.746,7.746,0,0,0,0,7.74V23.17A17.59,17.59,0,0,0,17.44,40.76h.98a17.6,17.6,0,0,0,17.6-17.6V7.74A7.74,7.74,0,0,0,28.28,0Z"
                    fill="#bcbcbc" />
                  <path id="패스_50547" data-name="패스 50547"
                    d="M49.32,15.17H31.53A14.092,14.092,0,0,0,17.44,29.26V40.75h0V58.86a4.757,4.757,0,0,0,8.05,3.43l9.23-9.54c.89-.85,1.3-1.33,2.52-1.33H49.32A14.092,14.092,0,0,0,63.41,37.33V29.26A14.092,14.092,0,0,0,49.32,15.17Zm6.37,25.68h0a10.293,10.293,0,0,1-14.87.03l-.12-.12-.04-.04h0a1.787,1.787,0,0,1,1.36-2.95,1.811,1.811,0,0,1,1,.3h0a10.328,10.328,0,0,0,5.23,1.41,10.2,10.2,0,0,0,5.12-1.35h0l.19-.11h0a1.879,1.879,0,0,1,.91-.25,1.783,1.783,0,0,1,1.23,3.08Z"
                    fill="#e8e8e8" />
                  <path id="패스_50548" data-name="패스 50548"
                    d="M18.42,40.77a17.6,17.6,0,0,0,17.6-17.6v-8H31.53A14.092,14.092,0,0,0,17.44,29.26V40.75h.98Z"
                    fill="#f9fbff" />
                </g>
              </g>
            </svg>
          </a>
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

          <div class="navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/message') }}">메세지</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/credit') }}">크레딧</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr/>
      <div class="container info">
        <p>문의 사항이 있으신가요? 텔레그램을 통해 고객센터로 문의 해 보세요.</p>
        <span>Telegram : @shdevelope</span>
      </div>
    </footer>
  </div>
</body>

</html>
