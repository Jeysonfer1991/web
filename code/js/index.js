const contenedorTarjetas = document.getElementById("productos-container");

/** Crea las tarjetas de productos teniendo en cuenta la lista en bicicletas.js */
function crearTarjetasProductosInicio(productos){
  productos.forEach(producto => {
    const nuevoElemento = document.createElement("div");
    nuevoElemento.classList = "tarjeta-producto"
    nuevoElemento.innerHTML = `
    <img src="./img/productos/${producto.id}.jpg" alt="Elemento 1">
    <h3>${producto.nombre}</h3>
    <p class="precio">$${producto.precio}</p>
    <button>Agregar al carrito</button>`
    contenedorTarjetas.appendChild(nuevoElemento);
    nuevoElemento.getElementsByTagName("button")[0].addEventListener("click",() => agregarAlCarrito(producto))
  });
}
crearTarjetasProductosInicio(elementos);