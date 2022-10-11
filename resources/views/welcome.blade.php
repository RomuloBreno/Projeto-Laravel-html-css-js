@extends('layouts.main')

@section('title', 'Página Inicial')

@section('banner')
<div class="banner banner-home">
      <div class="conteiner">
            <div class="row">
                  <div class="col-md-9">
                  </div>
                  @if(Auth::user())
                  <div class="col-md-1">
                        <a href="/painel" class="name-user">

                              <span class="btn-register btn-user">{{Auth::user()->name}}</span>
                        </a>
                  </div>
                  @else
                  <div class="col-md-1 nav-user">
                        <a href="/login" class="">
                              <span class="btn-login btn-user">Entrar</span>
                        </a>
                  </div>
                  <div class="col-md-1 nav-user">
                        <a href="/register" class="">
                              <span class="btn-register btn-user">Registrar</span>
                        </a>
                  </div>
                  @endif

            </div>
            <div class="row">
                  <div class="col-md-6 col-sm-1 infos-banner" data-aos="fade-right" data-aos-delay="300">

                        @if(Auth::user())
                        <h3>Olá, Seja bem-vindo {{Auth::user()->name}}</h3>
                        @else
                        <h3>Olá, Seja bem-vindo</h3>

                        @endif
                        <h4>Espero que goste desse meu trabalho</h4>
                        <h6>Caso queira entrar em contato <i class="bi bi-arrow-down-short"></i></h6>
                        <a href=""><button class="btn btn-banner form-controler">Entrar em contato</button></a>
                  </div>
            </div>


      </div>
</div>
@endsection
@section('content')

<div class="conteiner sessao-1">
      <div class="row text-center" data-aos="fade-down" data-aos-delay="300">

            <i class="bi bi-arrow-down-circle-fill arrow-move">
            </i>


      </div>
</div>

<div class="conteiner sessao-1">
      <div class="row text-center" data-aos="fade-down" data-aos-delay="300">
            <h3 id="projetos" class="titulo-sessao-1">Projetos já criados profissionalmente</h3>
      </div>
      <div class="row">

            <div class="col-2">
            </div>

            <div class="col-4">
                  <div class="imagem-sessao-1 imagem-sessao" data-aos="fade-right">
                        <span></span>
                  </div>
            </div>
            <div class="col-4 texto-sessao-1 texto-sessao" data-aos="fade-up">
                  <div class="row">
                        <h5 class="text-center">Js e MySQL(.gs)</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nobis dolorem tempora consequuntur vel ad neque, enim ut atque explicabo rem ea illo iste cumque ratione dolores harum dolore non.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi iure commodi nesciunt culpa nam, itaque asperiores dolores aliquam illum at harum veniam voluptates quaerat. Quae libero adipisci sequi veritatis fuga! Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolor quam maiores expedita ipsa, ut tempora minus natus deserunt.
                              <br><br>
                        </p>

                        <a href=""><button class="btn">Cadastro</button></a>
                  </div>
                  <div class="row">

                  </div>
            </div>


      </div>

</div>

<div class="conteiner sessao-1_2">

      <div class="row">

            <div class="col-2">
            </div>

            <div class="col-4  texto-sessao-1_2 texto-sessao" data-aos="fade-down">
                  <div class="row">
                        <h5 class="text-center">Js e Google Sheet(.js)</h5>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nobis dolorem tempora consequuntur vel ad neque, enim ut atque explicabo rem ea illo iste cumque ratione dolores harum dolore non.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi iure commodi nesciunt culpa nam, itaque asperiores dolores aliquam illum at harum veniam voluptates quaerat. Quae libero adipisci sequi veritatis fuga! Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolor quam maiores expedita ipsa, ut tempora minus natus deserunt.
                              <br><br>
                              <a href=""><button class="btn">Cadastro</button></a>
                        </p>
                  </div>
            </div>
            <div class="col-4 align-item-center">
                  <div class="imagem-sessao-1_2 imagem-sessao" data-aos="fade-left">
                        <span></span>

                  </div>
                  <div class="row">

                  </div>
            </div>


      </div>

</div>
<!-- <div class="conteiner sessao-2">
      <div class="row">
            <h3 class="titulo-sessao-2 text-center">Principais Linguagens</h3>
      </div>

            <br>
      <div class="row galeria">
            <div class="col-2"></div>
            <div class="col-8">
                  <img src="/img/linguagens/python.png" alt="" srcset="">
                  <img src="/img/linguagens/python.png" alt="" srcset="">
                  <img src="/img/linguagens/python.png" alt="" srcset="">
                  <img src="/img/linguagens/python.png" alt="" srcset="">
                  <img src="/img/linguagens/python.png" alt="" srcset="">
            </div>
            <div class="col-2"></div>
      </div>

</div> -->



<!-- <script>
      
      var controller = new ScrollMagic.Controller();
        new ScrollMagic.Scene({
        triggerElement:'imagem-sessao-1',
        duration: 1200
    })
      .setClassToggle('.imagem-sessao-1', 'show')
      .addTo(controller);
      

       new ScrollMagic.Scene({
          triggerElement:'texto-sessao-1',
          duration: 1200
        })
        .setClassToggle('.texto-sessao-1', 'show')
        .addTo(controller);
        
        
        new ScrollMagic.Scene({
        triggerElement:'imagem-sessao-1_2',
        duration: 1200
    })
      .setClassToggle('.imagem-sessao-1_2', 'show')
      .addTo(controller);
      
      
       new ScrollMagic.Scene({
        triggerElement:'texto-sessao-1_2',
        duration: 1200
    })
      .setClassToggle('.texto-sessao-1_2', 'show')
      .addTo(controller);
    

      
</script> -->
@endsection