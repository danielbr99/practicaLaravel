<nav class="nav">
  <div class="container">
    <a href="{{ route('main') }}">{{ __('app.home') }}</a>
    <a href="{{ route('about') }}">{{ __('app.about') }}</a>

    @auth
      <a href="{{ route('projects.index') }}">{{ __('app.projects') }}</a>
      <a href="{{ route('students.index') }}">{{ __('app.students') }}</a>
    @endauth

    <form method="POST" action="{{ route('language.set') }}" style="display:inline-block; margin-left: 12px;">
      @csrf
      <label for="locale" style="margin-right: 6px;">{{ __('app.language') }}:</label>
      <select id="locale" name="locale" onchange="this.form.submit()">
        <option value="es" {{ app()->getLocale() === 'es' ? 'selected' : '' }}>{{ __('app.spanish') }}</option>
        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>{{ __('app.english') }}</option>
        <option value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>{{ __('app.french') }}</option>
      </select>
    </form>

    @guest
      <a href="{{ route('register') }}">{{ __('app.register') }}</a>
      <a href="{{ route('login') }}">{{ __('app.login') }}</a>
    @endguest

    @auth
      <span class="nav-user">{{ auth()->user()->name }}</span>

      <form method="POST" action="{{ route('logout') }}" class="nav-logout">
        @csrf
        <button type="submit">{{ __('app.logout') }}</button>
      </form>
    @endauth
  </div>
</nav>
