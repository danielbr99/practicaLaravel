<x-layouts.app title="Crear alumno">
  <h2>Crear alumno</h2>

  <form method="POST" action="{{ route('students.store') }}">
    @csrf

    <label>Nombre</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name') <div class="error">{{ $message }}</div> @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email') <div class="error">{{ $message }}</div> @enderror

    <button class="btn" type="submit">Guardar</button>
    <a class="btn btn-secondary" href="{{ route('students.index') }}">Cancelar</a>
    <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  </form>
</x-layouts.app>
