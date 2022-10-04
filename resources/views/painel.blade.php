@extends('layouts.main')

@section('title', 'Painel')

@section('banner')
<div class="banner banner-home">
      <div class="conteiner">
            <div class="row">
                  <div class="col-md-8">
                  </div>
                  @if(Auth::user())
                  <div class="col-md-1">
                        <a href="/painel" class="">

                              <span class="btn-register btn-user name-user">{{Auth::user()->name}}</span>
                              <form method="POST" action="{{ route('logout') }}">
                              @csrf

                              <div class="logout hidden-logout">
                                    <x-responsive-nav-link class="" href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Log Out') }}

                              </div>
                    </x-responsive-nav-link>
                              </form>
                        </a>
                  </div>
                  @else
                  <div class="col-md-1 nav-user">
                        <a href="/login" class="">
                              <span class="btn-login btn-user">Entrar</span>
                        </a>
                  </div>
                  <div class="col-md-3">
                        <a href="/register" class="">
                              <span class="btn-register btn-user">Registrar</span>
                        </a>
                        @endif
                  </div>

            </div>
      </div>
</div>

<div class="row">
      <div class="col-md-6 col-sm-1 infos-banner" data-aos="fade-right" data-aos-delay="300">
            <h3>Olá, Seja bem-vindo {{ Auth::user()->name }}</h3>
            <h4>Espero que goste desse meu trabalho</h4>
            <h6>Caso queira entrar em contato <i class="bi bi-arrow-down-short"></i></h6>
            <a href=""><button class="btn btn-banner form-controler">Entrar em contato</button></a>
      </div>
</div>


</div>
</div>
@endsection
@section('content')

@endsection