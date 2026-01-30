<x-layouts.app title="Inicio">
  @guest
    <section class="hero">
      <h2>Bienvenido a mi aplicación</h2>
      <p>Regístrate o inicia sesión para acceder a todas las opciones.</p>

      <div class="hero-actions">
        <a class="btn" href="{{ route('register') }}">Register</a>
        <a class="btn btn-secondary" href="{{ route('login') }}">Login</a>
      </div>
    </section>
  @endguest

  @auth
    <section class="welcome">
      <h2>Hola, {{ auth()->user()->name }}</h2>

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-secondary" type="submit">Logout</button>
      </form>
    </section>

    <section class="cards">
      <h3>Opciones</h3>

      <div class="grid">
        <a class="card" href="#">
          <h4>Opción 1</h4>
          <p>Descripción breve de la opción.</p>
        </a>

        <a class="card" href="#">
          <h4>Opción 2</h4>
          <p>Descripción breve de la opción.</p>
        </a>

        <a class="card" href="#">
          <h4>Opción 3</h4>
          <p>Descripción breve de la opción.</p>
        </a>
      </div>
    </section>
  @endauth
</x-layouts.app>
