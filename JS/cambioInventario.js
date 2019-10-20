function cambioSubModuloProductos() {
    this.limpiarBarraMenu();
    var elem = document.getElementById('btnProductos');
    elem.className = "is-active";
}

function cambioSubModuloPlatillos() {
    this.limpiarBarraMenu();
    var elem = document.getElementById('btnPlatillos');
    elem.className = "is-active";
}

function limpiarBarraMenu() {
    var productos = document.getElementById('btnProductos');
    var platillos = document.getElementById('btnPlatillos');
    var reportes = document.getElementById('btnReportes');
    // var elem = document.getElementById('btnProductos');
    productos.className = "";
    platillos.className = "";
    platillos.className = "";
    // elem.className="";
}