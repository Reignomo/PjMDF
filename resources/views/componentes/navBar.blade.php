<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Familia Moderna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    @guest
    @else
      <li @if($current =="home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home</a>
      </li>
      <li @if($current =="Familias") class="nav-item active dropdown" @else class="nav-item dropdown" @endif>
        <a class="nav-link dropdown-toggle" id="linkClientes" role="button" data-toggle="dropdown" href="#">Familia</a>
        <div class="dropdown-menu" aria-labelledby="linkClientes">
          <a class="dropdown-item" href="/grupoFamiliar">Gerenciar atividades</a>
          <a class="dropdown-item" href="/addGrupoFamiliar">Adicionar grupo familiar</a>
        </div>
      </li>
      <li @if($current =="about") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/about">About</a>
      </li>
      @endguest
    </ul>
    <ul class="navbar-nav text-right">
        @guest
            <li @if($current =="register") class="nav-item active"  @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </div>
</nav>