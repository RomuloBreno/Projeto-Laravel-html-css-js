
    //Responsividade do footer
    document.addEventListener("DOMContentLoaded", function (event) {
    function footerMobile(){
        
        const conteinerFooterMobile = document.querySelector(".footerMobile");
        
        const widthBrowser = screen.width;
        
        if (widthBrowser <= 765){
            conteinerFooterMobile.classList.add('text-center')
            
        }
        
    }
    footerMobile();
    
//Lógica do formulário
    const email = document.querySelector('.email');
    const telefone = document.querySelector('.telefone');

document.querySelector('#email').addEventListener("click", function() {
    
if (document.querySelector('#email')){
    email.style.display="block"
    telefone.style.display="none"
}else{
    email.style.display="none"
    telefone.style.display="block"
}
});


document.querySelector('#telefone').addEventListener("click", function() {
    
if (document.querySelector('#telefone')){
    email.style.display="none"
    telefone.style.display="block"
}else{
    telefone.style.display="none"
    email.style.display="block"
}


});


    });

    

       
    //     var controller = new ScrollMagic.Controller();
    //     new ScrollMagic.Scene({
    //     triggerElement:'imagem-sessao-1'
    // })
    //   .setClassToggle('.imagem-sessao-1', 'show')
    //   .addTo(controller);
      
      
      
    //   var transitionTexto = new ScrollMagic.Scene({
    //       triggerElement:'texto-sessao-1',
    //       duration: 300
    //     })
    //     .setClassToggle('.texto-sessao-1', 'show')
    //     .addTo(controller);
        
        
    //     var transitionImagem = new ScrollMagic.Scene({
    //     triggerElement:'imagem-sessao-1_2'
    // })
    //   .setClassToggle('.imagem-sessao-1_2', 'show')
    //   .addTo(controller);
      
      
    //     var transitionTexto = new ScrollMagic.Scene({
    //     triggerElement:'texto-sessao-1_2'
    // })
    //   .setClassToggle('.texto-sessao-1_2', 'show')
    //   .addTo(controller);
    