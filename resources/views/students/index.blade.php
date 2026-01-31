<x-layouts.app title="{{ __('app.students') }}">
  <h2>{{ __('app.students_management') }}</h2>

  @if (session('success'))
    <div class="alert">{{ session('success') }}</div>
  @endif

  <a class="btn" href="{{ route('students.create') }}">
    {{ __('app.create_student') }}
  </a>

  <table class="table">
    <thead>
      <tr>
        <th>{{ __('app.id') }}</th>
        <th>{{ __('app.name') }}</th>
        <th>{{ __('app.email') }}</th>
        <th>{{ __('app.actions') }}</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($students as $student)
        <tr>
          <td>{{ $student->id }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->email }}</td>
          <td>
            <a class="btn btn-secondary" href="{{ route('students.show', $student) }}">
              {{ __('app.view') }}
            </a>
            <a class="btn btn-secondary" href="{{ route('students.edit', $student) }}">
              {{ __('app.edit') }}
            </a>

            <form class="inline delete-form" method="POST" action="{{ route('students.destroy', $student) }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">
                {{ __('app.delete') }}
              </button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4">{{ __('app.no_students') }}</td>
        </tr>
      @endforelse
    </tbody>
  </table>

  {{ $students->links() }}

  <a class="btn btn-secondary" href="{{ url()->previous() }}">
    {{ __('app.back') }}
  </a>

  @push('scripts')
    <script>
      document.querySelectorAll('.delete-form').forEach((form) => {
        form.addEventListener('submit', (e) => {
          e.preventDefault();
          Swal.fire({
            title: '{{ __('app.delete_student_title') }}',
            text: '{{ __('app.delete_student_text') }}',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: '{{ __('app.confirm_delete') }}',
            cancelButtonText: '{{ __('app.cancel') }}'
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
