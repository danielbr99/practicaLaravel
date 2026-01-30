<x-layouts.app title="Proyectos">
  <h2>Proyectos</h2>

  <div class="grid">
    @foreach ($projects as $project)
      <div class="card">
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
        <small>Estado: {{ $project->status }}</small>
      </div>
    @endforeach
  </div>

  <a class="btn btn-secondary" href="{{ url()->previous() }}">Volver</a>
</x-layouts.app>
