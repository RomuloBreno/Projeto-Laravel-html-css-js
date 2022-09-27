
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

    
    
    