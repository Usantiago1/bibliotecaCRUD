
const datos = {
    nombre:'',
    categoria:'',
    editorial:'',
    autor:'',
}

const nombre = document.querySelector('#nombre');
const categoria = document.querySelector('#categoria');
const editorial = document.querySelector('#editorial');
const autor = document.querySelector('#autor');

const formulario = document.querySelector('#submit')

eventListeners();
function eventListeners(){
    nombre.addEventListener('input', insertarDatos);
    categoria.addEventListener('input', insertarDatos);
    editorial.addEventListener('input', insertarDatos);
    autor.addEventListener('input', insertarDatos);

    formulario.addEventListener('submit', enviarDatos);
}


function insertarDatos(e){
    datos[e.target.id] = e.target.value;

    

}

function enviarDatos(e){
    e.preventDefault();

    const {nombre, categoria, editorial, autor} = datos;

    if(nombre === '' || categoria === '' || editorial === '' || autor === ''){
        swal({
            title: 'Biblioteca Virtual',
            text: 'Todos los campos son requeridos',
            icon: 'error'
        });
    }else{
        swal({
            title: 'Biblioteca Virtual',
            text: 'Datos ingresados correctamente', 
            icon: 'success'
        })
    }


}
