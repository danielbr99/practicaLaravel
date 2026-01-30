<x-layouts.app title="Editar alumno">
  <h2>Editar alumno</h2>

  <form method="POST" action="{{ route('students.update', $student) }}">
    @csrf
    @method('PUT')

    <label>Nombre</label>
    <input type="text" name="name" value="{{ old('name', $student->name) }}">
    @error('name') <div class="error">{{ $message }}</div> @enderror

    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $student->email) }}">
    @error('email') <div class="error">{{ $message }}</div> @enderror

    <button class="btn" type="submit">Actualizar</button>
    <a class="btn btn-secondary" href="{{ route('students.index') }}">Cancelar</a>
    <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
  </form>
</x-layouts.app>
