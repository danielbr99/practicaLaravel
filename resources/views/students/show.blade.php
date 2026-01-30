<x-layouts.app title="Ver alumno">
  <h2>Alumno</h2>

  <div class="card">
    <p><strong>ID:</strong> {{ $student->id }}</p>
    <p><strong>Nombre:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
  </div>

  <a class="btn btn-secondary" href="{{ route('students.index') }}">Cancelar</a>
  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
</x-layouts.app>
