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
      const url = document.querySelector('.site').value;
      const cliente = document.querySelector('.cliente').value;

      camposStatus.style.display = 'none';

      //   if (!url || !cliente) {
      //     camposStatus.style.display = 'block';
      //     camposStatus.innerHTML = 'O campo URL: precisa ser preenchido<br>';
      //     camposStatus.innerHTML += 'O campo Cliente precisa ser preenchido';
      //     return;
      //   }

      let urldefault = `https://sheetdb.io/api/v1/r9fdgawufubel/search?Url=${url}&Cliente=${cliente}`;



      if (!url) {
        camposStatus.style.display = 'block';
        urldefault = `https://sheetdb.io/api/v1/r9fdgawufubel/search?Cliente=${cliente}`;
      }

      if (!cliente) {
        camposStatus.style.display = 'block';
        urldefault = `https://sheetdb.io/api/v1/r9fdgawufubel/search?Url=${url}`;
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