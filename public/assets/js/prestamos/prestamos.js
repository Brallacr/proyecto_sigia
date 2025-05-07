// const title = document.getElementById('menuTitle');
// const menuTitleConsult = document.getElementById('menuTitleConsult');
// const btnSubmit = document.getElementById('btnSubmit');
// console.log({title,menuTitleConsult});
// menuTitleConsult.innerText = 'Consultar Prestamos';
// title.innerText = 'Registrar solicitud';
// btnSubmit.innerText = 'Reservar';
// table.classList.add('table');
// table.setAttribute('scope','row');

const inputElement = document.querySelectorAll('.inputForm input, .inputForm select');
const table = document.querySelector('#tableElements');




inputElement.forEach(element =>{

    /**
     * 
     * aclaracion hecha por mi = type sirve para saber que tipo de input es, si es email, number, entre otros.
     * tagName para saber que etiqueta es, si es un select, una tabla o un input.
     */

    if (element.tagName === 'SELECT') {
        element.classList.add('form-select');
    } else if (element.tagName === 'INPUT') {
        element.classList.add('form-control');
    }

});