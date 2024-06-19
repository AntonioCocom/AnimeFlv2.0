document.addEventListener("DOMContentLoaded", function() {
    fetch('./db/obtener_juegos.php')
        .then(response => response.json())
        .then(data => {
            const juegosLista = document.getElementById('juegos-lista');
            let html = '<ul>';
            data.forEach(juego => {
                html += `<li>
                            <strong>${juego.nombre}</strong> - ${juego.descripcion}<br>
                            Precio: ${juego.precio}<br>
                            Cantidad: ${juego.cantidad}<br>
                            <img src="${juego.imagenes[0].url}" alt="${juego.nombre}">
                         </li>`;
            });
            html += '</ul>'; // Corrección aquí
            juegosLista.innerHTML = html;
        })
        .catch(error => {
            console.error('Error al obtener los juegos:', error);
        });
});
