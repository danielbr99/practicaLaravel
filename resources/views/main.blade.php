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
        <a class="card" href="{{ route('projects.index') }}">
          <h4>Proyectos</h4>
          <p>Ver proyectos cargados mediante seeders.</p>
        </a>

        <a class="card" href="{{ route('students.index') }}">
          <h4>Gestión de alumnos</h4>
          <p>Crear, editar, eliminar y listar alumnos.</p>
        </a>
      </div>
    </section>
  @endauth
</x-layouts.app>
