@extends('layouts.main')

@section('title', 'Página Inicial')

@section('banner')
<div class="banner">
      <div class="conteiner">
            <div class="row">
                  <div class="col-md-4 col-sm-1 infos-banner">
                        <h3>Olá, Seja bem-vindo</h3>
                        <h4>Espero que goste desse meu trabalho</h4>
                        <h6>Caso queira entrar em contato <i class="bi bi-arrow-down-short"></i></h6>
                        <a href=""><button class="btn btn-banner form-controler">Entrar em contato</button></a>
                  </div>

                  <div class="col-md-4">

                  </div>
                  <div class="col-md-4">

                  </div>
            </div>

      </div>
</div>
@endsection
@section('content')



<div class="conteiner sessao-1">
      <div class="row text-center">
            <h3 class="titulo-sessao-1">Lorem sessao 1</h3>
      </div>
      <div class="row">

            <div class="col-2">
            </div>

            <div class="col-4">
                  <div class="imagem-sessao-1" data-aos="fade-right">
                        <span></span>
                  </div>
            </div>
            <div class="col-4 texto-sessao-1" data-aos="fade-up">
                  <div class="row ">
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nobis dolorem tempora consequuntur vel ad neque, enim ut atque explicabo rem ea illo iste cumque ratione dolores harum dolore non.</span>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi iure commodi nesciunt culpa nam, itaque asperiores dolores aliquam illum at harum veniam voluptates quaerat. Quae libero adipisci sequi veritatis fuga! Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolor quam maiores expedita ipsa, ut tempora minus natus deserunt.
                              <br><br>
                        </span>

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

            <div class="col-4  texto-sessao-1_2" data-aos="fade-down" >
                  <div class="row">
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nobis dolorem tempora consequuntur vel ad neque, enim ut atque explicabo rem ea illo iste cumque ratione dolores harum dolore non.</span>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi iure commodi nesciunt culpa nam, itaque asperiores dolores aliquam illum at harum veniam voluptates quaerat. Quae libero adipisci sequi veritatis fuga! Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolor quam maiores expedita ipsa, ut tempora minus natus deserunt.
                              <br><br>
                              <a href=""><button class="btn">Cadastro</button></a>
                        </span>
                  </div>
            </div>
            <div class="col-4 align-item-center">
                  <div class="imagem-sessao-1_2" data-aos="fade-left">
                        <span></span>

                  </div>
                  <div class="row">

                  </div>
            </div>


      </div>

</div>
<div class="conteiner sessao-2">
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
                  <!-- <img src="" alt="" srcset="">
                  <img src="" alt="" srcset="">
                  <img src="" alt="" srcset="">
                  <img src="" alt="" srcset="">
                  <img src="" alt="" srcset=""> -->

            </div>
            <div class="col-2"></div>
      </div>

</div>



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