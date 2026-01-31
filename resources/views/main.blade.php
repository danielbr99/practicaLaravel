<x-layouts.app title="{{ __('app.home') }}">
  @guest
    <section class="hero">
      <h2>{{ __('app.welcome_title') }}</h2>
      <p>{{ __('app.welcome_text') }}</p>

      <div class="hero-actions">
        <a class="btn" href="{{ route('register') }}">{{ __('app.register') }}</a>
        <a class="btn btn-secondary" href="{{ route('login') }}">{{ __('app.login') }}</a>
      </div>
    </section>
  @endguest

  @auth
    <section class="welcome">
      <h2>{{ __('app.hello') }}, {{ auth()->user()->name }}</h2>

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-secondary" type="submit">{{ __('app.logout') }}</button>
      </form>
    </section>

    <section class="cards">
      <h3>{{ __('app.options') }}</h3>

      <div class="grid">
        <a class="card" href="{{ route('projects.index') }}">
          <h4>{{ __('app.projects') }}</h4>
          <p>{{ __('app.projects_card_text') }}</p>
        </a>

        <a class="card" href="{{ route('students.index') }}">
          <h4>{{ __('app.students_management') }}</h4>
          <p>{{ __('app.students_card_text') }}</p>
        </a>
      </div>
    </section>
  @endauth
</x-layouts.app>
