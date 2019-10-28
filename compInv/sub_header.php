<div class="tabs is-centered is-boos-med">
        <ul>
            <li id="btnProductos" class="is-active"onclick="cambioSubModuloProductos()"><a href="Inv.php">Productos</a></li>
            <li id="btnPlatillos" onclick="cambioSubModuloPlatillos()"><a href="sub_Platillos.php">Platillos</a></li>
            <li id="btnProveedores" onclick="cambioSubModuloProveedores()"><a href="sub_Proveedores.php">Proveedores</a></li>
            <li id="btnReportes"onclick="cambioSubModulo()"><a href="">Reportes</a></li>
        </ul>
</div>

<script>    

function cambioSubModuloProductos() {
    this.limpiarBarraMenu();
    var elem = document.getElementById('btnProductos');
    elem.className = "is-active";
}

function nombreMetodo() {
    this.limpiarBarraMenu();
    var elem = document.getElementById('btnPlatillos');
    elem.className = "is-active";
}

function cambioSubModuloProveedores() {
    this.limpiarBarraMenu();
    var elem = document.getElementById('btnProveedores');
    elem.className = "is-active";
    // alert("Hola");
}

function limpiarBarraMenu() {
    var productos = document.getElementById('btnProductos');
    var platillos = document.getElementById('btnPlatillos');
    var proveedores = document.getElementById('btnProveedores');
    var reportes = document.getElementById('btnReportes');
    productos.className = "";
    platillos.className = "";
    proveedores.className = "";
    reportes.className = "";
}





</script>