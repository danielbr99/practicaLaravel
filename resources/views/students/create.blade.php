<x-layouts.app title="{{ __('app.create_student_title') }}">
  <h2>{{ __('app.create_student_title') }}</h2>

  <form method="POST" action="{{ route('students.store') }}">
    @csrf

    <label>{{ __('app.name') }}</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name') <div class="error">{{ $message }}</div> @enderror

    <label>{{ __('app.email') }}</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email') <div class="error">{{ $message }}</div> @enderror

    <button class="btn" type="submit">{{ __('app.save') }}</button>
    <a class="btn btn-secondary" href="{{ route('students.index') }}">{{ __('app.cancel') }}</a>
    <a class="btn btn-secondary" href="{{ url()->previous() }}">{{ __('app.back') }}</a>
  </form>
</x-layouts.app>
