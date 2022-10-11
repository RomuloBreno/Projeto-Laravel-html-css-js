@extends('layouts.main')

@section('title', 'Pesquisa de Dados')

@section('content')
<script src="/js/search.js"></script>
<div class="banner-pesquisar banner" >
<div class="main">

  <div class="container text-center ">
  
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
          <form>
          @csrf
            <div class="mb-3">
              <span class="text-center">Experimente digitar "Romulo"</span>
              <input class="cliente nome form-control" type="text" size="50" placeholder="Nome" />
            </div>
            <div>
            <span class="text-center">ou</span>
            <br><br>
            </div>
            <div class="mb-3">
              <input class="site e-mail form-control" type="text" size="50" placeholder="E-mail" />
            </div>
            <div class="mb-3">
              <button class="btn btnPesquisa" type="submit">Enviar</button>
            </div>
  
          </form>
        </div>
      </div>
      </div>
  
      <div class="conteiner text-center">
  
        <div class="row">
        <div class="col-4"></div>
          <div class="col-4">
            
            <div id="camposStatus" class="main" style="display: none; color:#ccc !important;">
          
            <div id="res">
              <ul style="display: none; color:#ccc; font-weight: 700;">
            
              </ul>
              <div class="row">
                <div class="col">
                  <button class="btn btnNovaConsultar" type="submit">Nova Pesquisa</button>
                </div>

              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
</div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



@endsection