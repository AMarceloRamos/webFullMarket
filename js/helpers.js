// Helper para borrar el contador del carrito en el localStorage y la interfaz
function borrarContadorCarrito() {
    // Eliminar el valor del contador del localStorage
    localStorage.removeItem('cart-Count');
    
    // Actualizar la interfaz de usuario
    const cartCountElement = document.getElementById('cart-count');
    cartCountElement.textContent = '0';  // Poner el contador a 0
    cartCountElement.style.display = 'none';  // Ocultar el contador si está vacío
}
