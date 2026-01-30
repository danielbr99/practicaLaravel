<x-layouts.app title="Alumnos">
  <h2>Gestión de alumnos</h2>

  @if (session('success'))
    <div class="alert">{{ session('success') }}</div>
  @endif

  <a class="btn" href="{{ route('students.create') }}">Crear alumno</a>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($students as $student)
        <tr>
          <td>{{ $student->id }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->email }}</td>
          <td>
            <a class="btn btn-secondary" href="{{ route('students.show', $student) }}">Ver</a>
            <a class="btn btn-secondary" href="{{ route('students.edit', $student) }}">Editar</a>

            <form class="inline delete-form" method="POST" action="{{ route('students.destroy', $student) }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4">No hay alumnos.</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{ $students->links() }}

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>

  @push('scripts')
    <script>
      document.querySelectorAll('.delete-form').forEach((form) => {
        form.addEventListener('submit', (e) => {
          e.preventDefault();
          Swal.fire({
            title: '¿Eliminar alumno?',
            text: 'Esta acción no se puede deshacer.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }
          });
        });
      });
    </script>
  @endpush
</x-layouts.app>
