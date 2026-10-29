<header class="container bg-dark text-white">
    <div class="row">
        <div class="col-4">
            <h1>Nuevo Sitio</h1>
        </div>
        <div class="col-4">
            <div class="search">
                <form action="resultado_busqueda.php" method="POST">
                    <input type="search" name="busqueda" placeholder="Buscar usuarios..." class="form-control">
                </form>
            </div>
        </div>
        <div class="col-4">
            <nav class="nav">
                <a href="cargarUsuarios.php" class="nav-link" href="#">+ Nuevo Usuario</a>
                <a href="mostrarUsuarios.php" class="nav-link active" aria-current="page" href="#">Ver todo</a>
            </nav>
        </div>       
    </div>
</header>