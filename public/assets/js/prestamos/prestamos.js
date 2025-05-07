const title = document.getElementById('menuTitle');

title.innerText = 'Registrar solicitud';

const inputElement = document.querySelectorAll('.inputForm input, .inputForm select');
const table = document.querySelector('#tableElements');
console.log(table);

table.classList.add('table');
table.setAttribute('scope','row');

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


