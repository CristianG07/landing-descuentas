// const scriptURL = 'https://sheet.best/api/sheets/58786077-4224-4479-9429-4f6eeb413358';
const form = document.forms['SUBCRITOS']

form.addEventListener('submit', (e) => {
  e.preventDefault()
  location.href = './formulario.html';
  // fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  //     .then(() => location.href = './formulario.html')
  //     .catch(error => console.error('Error!', error.message))
});


