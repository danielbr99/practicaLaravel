<x-layouts.app title="{{ __('app.view_student_title') }}">
  <h2>{{ __('app.student') }}</h2>

  <div class="card">
    <p><strong>{{ __('app.id') }}:</strong> {{ $student->id }}</p>
    <p><strong>{{ __('app.name') }}:</strong> {{ $student->name }}</p>
    <p><strong>{{ __('app.email') }}:</strong> {{ $student->email }}</p>
  </div>

  <a class="btn btn-secondary" href="{{ route('students.index') }}">
    {{ __('app.cancel') }}
  </a>
  <a class="btn btn-secondary" href="{{ url()->previous() }}">
    {{ __('app.back') }}
  </a>
</x-layouts.app>
