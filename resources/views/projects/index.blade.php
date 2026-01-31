<x-layouts.app title="{{ __('app.projects') }}">
  <h2>{{ __('app.projects') }}</h2>

  <div class="grid">
    @foreach ($projects as $project)
      <div class="card">
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
        <small>{{ __('app.status') }}: {{ $project->status }}</small>
      </div>
    @endforeach
  </div>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">{{ __('app.back') }}</a>
</x-layouts.app>
