<nav class="nav">
  <div class="container">
    <a href="{{ route('main') }}">Inicio</a>
    <a href="{{ route('about') }}">About</a>

    @guest
      <a href="{{ route('register') }}">Register</a>
      <a href="{{ route('login') }}">Login</a>

    @endguest

    @auth

      <a href="{{ route('projects.index') }}">Proyectos</a>
      <a href="{{ route('students.index') }}">Alumnos</a>
      <span class="nav-user">{{ auth()->user()->name }}</span>

      <form method="POST" action="{{ route('logout') }}" class="nav-logout">
        @csrf
        <button type="submit">Logout</button>
      </form>
    @endauth
  </div>
</nav>



