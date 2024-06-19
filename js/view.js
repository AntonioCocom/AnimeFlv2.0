let btnJuegos = document.getElementById('btnJuegos');
let juegos = document.getElementById('juegos');
let btnusers = document.getElementById('btnusers');
let agregarjuegos = document.getElementById('agregarjuegos');
let btnagregarjuegos = document.getElementById('btnagregarjuegos');

btnJuegos.addEventListener('click', function(){
    juegos.classList.remove('d-none');
});

btnusers.addEventListener('click', function(){
    juegos.classList.add('d-none');
})

btnagregarjuegos.addEventListener('click', function(){
    agregarjuegos.classList.remove('d-none');
    juegos.classList.add('d-none');
})
