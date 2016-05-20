<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Gestión de colas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php if($rol==='Admin'){ ?>
                <li><a style="cursor:pointer" onclick="menuPrincipal('usuarios')">Inicio</a></li>
                <?php }else{ ?>
                <li><a style="cursor:pointer" onclick="menuPrincipal('cola')">Inicio</a></li>
                <?php } ?>
                <li><a style="cursor:pointer" onclick="menuPrincipal('perfil')">Perfil</a></li>
                <li><a style="cursor:pointer" onclick="menuPrincipal('acerca')">Acerca de</a></li>
                <li><a href="view/usuario/cerrarSesion.php">Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>