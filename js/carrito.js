// import { borrarContadorCarrito } from './helpers.js';
class Carrito {
    constructor(){
        this.cartCount = 0; // Inicializamos el contador de productos en el carrito
        this.listaProductos = document.getElementById('carrito'); // Asumimos que tienes un contenedor para la lista de productos
        this.actualizarContador();
    }

    // Función para agregar productos al carrito
    comprarProducto(e){
        e.preventDefault();
        if(e.target.classList.contains('agregar-carrito')){
            const producto = e.target.parentElement.parentElement;
            this.leerDatosProducto(producto);
        }
    }

    // Función para leer los datos del producto
    leerDatosProducto(producto){
        const infoProducto = {
            imagen: producto.querySelector('img').src,
            titulo: producto.querySelector('h4').textContent,
            precio: producto.querySelector('.precio span').textContent,
            id: producto.querySelector('a').getAttribute('data-id'),
            cantidad: 1
        }

        let productosLS = this.obtenerProductosLocalStorage();
        let productoExistente = productosLS.find(productoLS => productoLS.id === infoProducto.id);

        if(productoExistente){
            Swal.fire({
                type: 'info',
                title: 'El producto ya está agregado',
                text: 'El producto ya está en el carrito',
                showConfirmButton: false,
                timer: 2000
            });
        } else {
            this.insertarCarrito(infoProducto);
        }
    }

    // Insertar el producto en el carrito
    insertarCarrito(producto){
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${producto.imagen}" width="100"></td>
            <td>${producto.titulo}</td>
            <td>${producto.precio}</td>
            <td><a href="#" class="borrar-producto fas fa-times-circle" data-id="${producto.id}"></a></td>
        `;
        this.listaProductos.appendChild(row);
        this.guardarProductosLocalStorage(producto);
    }

    // Guardar productos en localStorage
    guardarProductosLocalStorage(producto){
        let productosLS = this.obtenerProductosLocalStorage();
        productosLS.push(producto);
        localStorage.setItem('productos', JSON.stringify(productosLS));
        this.actualizarContador();
    }

    // Obtener productos desde localStorage
    obtenerProductosLocalStorage(){
        let productos = JSON.parse(localStorage.getItem('productos')) || [];
        return productos;
    }

    // Eliminar un producto del carrito
    eliminarProducto(e){
        e.preventDefault();
        if(e.target.classList.contains('borrar-producto')){ 
            const productoID = e.target.getAttribute('data-id');
            e.target.parentElement.parentElement.remove();
            this.eliminarProductoLocalStorage(productoID);
        }
    }

    // Eliminar producto del localStorage
    eliminarProductoLocalStorage(productoID){
        let productosLS = this.obtenerProductosLocalStorage();
        productosLS = productosLS.filter(productoLS => productoLS.id !== productoID);
        localStorage.setItem('productos', JSON.stringify(productosLS));
        this.actualizarContador();
    }

    // Actualizar contador de productos en el carrito
    actualizarContador(){
        const productosLS = this.obtenerProductosLocalStorage();
        this.cartCount = productosLS.length;
        const cartCountElement = document.getElementById('cart-count');
        cartCountElement.textContent = this.cartCount;
        cartCountElement.style.display = this.cartCount > 0 ? 'block' : 'none';
        localStorage.setItem("cartCount", this.cartCount);
    }

    // Vaciar el carrito
    vaciarCarrito(e){
        e.preventDefault();  //pasamos el parametro para detectar el clic en eliminar
        // el ciclo while mientras exista a lo menos un elemento en nuestra lista producto
        // los vamos a remover todos de la tabla Carrito
        while(listaProductos.firstChild){
            //removechild elimna el elemento del nodo padre en esta caso nuestra tabla temporal
            listaProductos.removeChild(listaProductos.firstChild);
        }
        //vaciamos el Localstorage llamado a la funcion abajo vaciarLocalStorage
        this.vaciarLocalStorage();
        return false;
    }
    //Eliminar todos los datos del LS
    vaciarLocalStorage(){
        localStorage.clear();
        }


    // Leer los productos desde el LocalStorage
    leerLocalStorage(){
        let productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(producto => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${producto.imagen}" width="100"></td>
                <td>${producto.titulo}</td>
                <td>${producto.precio}</td>
                <td><a href="#" class="borrar-producto fas fa-times-circle" data-id="${producto.id}"></a></td>
            `;
            this.listaProductos.appendChild(row);
        });
    }
}



// Instanciamos la clase
// const carrito = new Carrito();

// Event listeners
// document.addEventListener('click', (e) => carrito.comprarProducto(e));
// document.addEventListener('click', (e) => carrito.eliminarProducto(e));
// document.addEventListener('click', (e) => carrito.vaciarCarrito(e));

// borrarContadorCarrito();