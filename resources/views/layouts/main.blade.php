<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <!--CSS-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/script.js"></script>
  <script src="/js/menu.js"></script>
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  
</head>
<header>
</header>

<body class="antialiased">

  <div class="menu-fixo" id="menu-fixo">
    <div class="btn-menu-lateral"><span class="openbtn" id="myopnebtn" onclick="openNav()">Ligue ou entre em contato</span>
      <span class="openbtn2" id="myopnebtn2" onclick="closeNav()">Ligue ou entre em contato</span>
    </div>



    <div id="mySidenav" class="sidenav"><span class=" xfechar" onclick="closeNav()">×</span>
      <p class="textos-menu-lateral" style="color: rgb(58 56 56);">Caso tenha qualquer dúvida sobre mim não exite em:</p>
      <div class="suportes-menu-lateral" id="suportes-menu-lateral">
        <span class="icon-menu-lateral-1"></span> <a href="#">Enviar uma mensagem</a></br></br>
        <span class="icon-menu-lateral-2"></span> <a href="#">Ligar para (11) 98058-1033</a></br></br>
        <hr class="hr" />
        <span class="icon-menu-lateral-6"></span> <a href="#" style="color: rgb(58 56 56); font-size:14px;">Ou envie uma mensagem pelo WhatsApp</br>(11)98058-1033 </a></br></br>
      </div>
    </div>
  </div>


  @yield('banner')


  <div class="conteiner">
    <div class="header" id="myHeader">

      <div class="menu-dad">

        <div class="menu-nav">
          <div align="center" class="texto-ajust">
            <a href="" class="texto-menu">Projetos</a>
            <div class="texto-ajust texto-submenu-esconder">
              <a href="" class="texto-submenu">Python</a>
              <a href="" class="texto-submenu">MySQL</a>
            </div>
          </div>


        </div>


        <div class="menu-nav">

          <div align="center" class="texto-ajust">
            <a href="" class="texto-menu">Sobre</a>
            <div class="texto-ajust texto-submenu-esconder">
              <a href="" class="texto-submenu">Quem sou?</a>
              <a href="" class="texto-submenu">Habilidades</a>
            </div>
          </div>
        </div>




        <div class="menu-nav">
          <div align="center" class="texto-ajust">
            <a href="" class="texto-menu">Contato</a>
            <div class="texto-ajust texto-submenu-esconder">
              <a href="" class="texto-submenu">Formulário</a>
              <a href="" class="texto-submenu">Sociais</a>
            </div>
          </div>
        </div>





      </div>
    </div>
  </div>


  @yield('content')



  <footer>
    <div class="conteiner footerMobile">

      <div class="row">
      <div class="col-md-1">

        </div>

        <div class="col-md-3 infos-footer">
          <span><a href="">Romulo Breno</a></span><br>
          <span><a href="">Desenvolvedor Fullstack</a></span>
          <hr>
          <span><i class="bi bi-whatsapp"></i><a href="">(11)980581033</a></span><br>
          <span><i class="bi bi-envelope"></i><a href="">romulobrenolins@gmail.com</a></span><br>

        </div>

          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4 navFooter">
                <h3><a href="">Projetos</a></h3>
                <span><i class="bi bi-arrow-right-short"></i><a href="">Python</a></span><br>
                <span><i class="bi bi-arrow-right-short"></i><a href="">MySQL</a></span><br>
      
              </div>
              <div class="col-md-4 navFooter">
              <h3><a href="">Sobre</a></h3>
                <span><i class="bi bi-arrow-right-short"></i><a href="">Quem sou?</a></span><br>
                <span><i class="bi bi-arrow-right-short"></i> <a href="">Habilidades</a></span><br>
      
              </div>
              
      
              <div class="col-md-4 navFooter">
              
              <h3><a href="">Contato</a></h3>
                <span><i class="bi bi-arrow-right-short"></i><a href="">Formulário</a></span><br>
                <span><i class="bi bi-arrow-right-short"></i><a href="">Sociais</a></span><br>
              </div>

              
            </div>

          </div>

        <div class="col-md-2">
          <h4>
            Envie sua mensagem
          </h4> <br>
          <form action="" class="form">
            <div class="radioForm">
              <div class="form-group">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="email" require/>
                <label class="form-check-label" for="email"> E-mail </label>
              </div>
              
            

              <!-- Default checked radio -->
              <div class="form-group">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="telefone" require />
                <label class="form-check-label" for="telefone">Telefone </label>
              </div>
            </div>

                   <div class="form-group">
                     <input type="Telefone" class="input form-control telefone" placeholder="Telefone" >
                     <input type="e-mail" class="input form-control email" placeholder="E-mail">

                   </div>
          
            <div class="form-group">
              
              <span>Mensagem </span>
              <textarea name="" id="" class="form-control" cols="15" rows="0"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn form-btn form-control">Enviar</button>

            </div>


          </form>

        </div>

        <div class="col-1">
              
          </div>
        </div>
        <br>
        <div class="copy text-center">
          <p>Rômulo Breno &copy; 2022</p>
        </div>
    </div>
  </footer>
</body>

</html>