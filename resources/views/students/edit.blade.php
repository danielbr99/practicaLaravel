<x-layouts.app title="{{ __('app.edit_student_title') }}">
  <h2>{{ __('app.edit_student_title') }}</h2>

  <form method="POST" action="{{ route('students.update', $student) }}">
    @csrf
    @method('PUT')

    <label>{{ __('app.name') }}</label>
    <input type="text" name="name" value="{{ old('name', $student->name) }}">
    @error('name') <div class="error">{{ $message }}</div> @enderror

    <label>{{ __('app.email') }}</label>
    <input type="email" name="email" value="{{ old('email', $student->email) }}">
    @error('email') <div class="error">{{ $message }}</div> @enderror

    <button class="btn" type="submit">{{ __('app.update') }}</button>
    <a class="btn btn-secondary" href="{{ route('students.index') }}">{{ __('app.cancel') }}</a>
    <a class="btn btn-secondary" href="{{ url()->previous() }}">{{ __('app.back') }}</a>
  </form>
</x-layouts.app>
