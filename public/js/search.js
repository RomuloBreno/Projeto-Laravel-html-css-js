document.addEventListener("DOMContentLoaded", function (event) {


  const btnpesquisa = document.querySelector('.btnPesquisa');
  const formSearch = document.querySelector('form');
  const div = document.querySelector('#res > ul');
  const btnNovaConsulta = document.querySelector(".btnNovaConsultar");
  btnpesquisa.addEventListener('click', (e) => {
    e.preventDefault();
  });
  addEventListener('load', () => {
   
    const camposStatus = document.querySelector('#camposStatus');

    const consulta = async () => {
      const email = document.querySelector('.e-mail').value;
      const nome = document.querySelector('.nome').value;

      camposStatus.style.display = 'none';

      let urldefault = `https://sheetdb.io/api/v1/y7xb1zj5oy5jk/search?Nome=${nome}&E-mail=${email}`;



      if (!nome) {
        camposStatus.style.display = 'block';
        urldefault = `https://sheetdb.io/api/v1/y7xb1zj5oy5jk/search?E-mail=${email}`;
      }

      if (!email) {
        camposStatus.style.display = 'block';
        urldefault = `https://sheetdb.io/api/v1/y7xb1zj5oy5jk/search?Nome=${nome}`;
      }

      const res = await axios.get(urldefault);
      const data = res.data[0];

      div.style.display = 'none';

      if (!data) {
        camposStatus.style.display = 'block';
        camposStatus.textContent = 'Nenhum registro encontrado, tente novamente com os dados corretos.';
        return;
      }

      div.style.display = 'block';
      div.innerHTML = '';
      div.style.marginTop = '-160px'
      formSearch.style.display = "none"
      for (const prop in data) {
        div.innerHTML += `<li><span class="nomeDado">${prop.replace(/:/g, '')}</span>: ${data[prop]}</li>`;
      }
      btnNovaConsulta.style.display = 'block';
    }
    btnpesquisa.addEventListener('click', (e) => {
      consulta();
    });
  });

  
  
  const Novaconsulta = async () => {
    div.style.display = 'none';
    formSearch.style.display = 'block';
    btnNovaConsulta.style.display = 'none';

  }
  btnNovaConsulta.addEventListener('click', (e) => {
    Novaconsulta();
  });





});