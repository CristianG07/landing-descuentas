// const scriptURL = 'https://sheet.best/api/sheets/58786077-4224-4479-9429-4f6eeb413358';
const form = document.forms['FORMULARIO']

form.addEventListener('submit', (e) => {
  e.preventDefault();
  location.href = '/';
  // fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  //     .then(response => console.log('Success!', response))
  //     .then(() => location.href = '../index.html')
  //     .catch(error => console.error('Error!', error.message))
});