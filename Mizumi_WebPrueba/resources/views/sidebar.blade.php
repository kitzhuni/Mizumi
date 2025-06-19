<script>
        function toggleSubMenu(event) {
            // Encuentra el submenú dentro del <li> clickeado
            var submenu = event.currentTarget.querySelector(".submenu");
            if (submenu) {
                submenu.style.display = (submenu.style.display === "none" || submenu.style.display === "") ? "block" : "none";
            }
        }
</script>
<!-- Sidebar -->
<h3 style="align-items:center; justify-content: center;">Balance Score Card</h3>

<ul>
    <li>
        <a class="a-bar" href="{{ route('admin.dashboard') }}" style="color:white; text-decoration:none;">
            <i class="material-icons" style="margin-right:10px">home</i>Inicio
        </a>
    </li>
   
    <li onclick="toggleSubMenu(event)" style="cursor: pointer;">
        <a class="a-bar" href="#" style="color:white; text-decoration:none;"><i class="material-icons" style="margin-right:10px">group</i> Administración</a>
        <ul class="submenu" style="display: none; list-style: none; padding-left: 20px;">
            <li><a class="a-bar" href="{{ route('usuarios.index') }}" style="color:white; text-decoration:none;"> Usuarios</a></li>
            <li><a class="a-bar" href="{{ route('propiedades.panel') }}" style="color:white; text-decoration:none;"> Propiedades</a></li>
        </ul>
    </li>
</li>
    <li>
        <a class="a-bar" href="{{ route('objetivos.index') }}" style="color:white; text-decoration:none;">
            <i class="material-icons" style="margin-right:10px">sort</i>Objetivos
        </a>
    </li>
    <li>
        <a class="a-bar" href="" style="color:white; text-decoration:none;">
            <i class="material-icons" style="margin-right:10px">dashboard</i> Indicadores
        </a>
    </li>

</ul>
<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <div class="cerrar">
        <button type="submit" style="background:none; border:none; color:white; cursor:pointer;">
            <i class="material-icons" style="margin-right:10px">logout</i> Cerrar Sesión
        </button>
    </div>
    
</form>
<div style="align-items:center; justify-content:center; margin-top:20px; ">
    <img src="{{ asset('images/mundoimperial.png') }}" alt="Logo de la empresa" style="width: 150px;">
</div>
        

