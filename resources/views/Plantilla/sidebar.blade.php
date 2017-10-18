<aside id="left-panel">
    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it -->

            <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                <img src="{{ asset('plantilla/img/avatars/male.png') }}" alt="me" class="online" />
                <span>
                    {{ Auth::user()->nombre . ' '.  Auth::user()->apellido}}
                </span>
            </a>

        </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li class="active">
                <a href="{{ url('/') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Inicio</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Gestion de Usuario</span></a>
                <ul>
                    <li>
                        <a href="{{ url('user/registro') }}">Crear Usuario</a>
                    </li>
                    <li>
                        <a href="{{ url('user/modificar') }}">Modificar Usuario</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">RFID</span></a>
                <ul>
                    <li>
                        <a href="{{ url('rfid') }}">Registrar RFID</a>
                    </li>
                    <li>
                        <a href="{{ url('rfids') }}">Registrar RFID Masivo</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Mascotas</span></a>
                <ul>
                    <li>
                        <a href="{{ url('mascota') }}">Registrar Mascota</a>
                    </li>
                    <li>
                        <a href="{{ url('mascota/buscar') }}">Busqueda de Mascota</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Veterinaria</span></a>
                <ul>
                    <li>
                        <a href="{{ url('veterinaria/registro') }}">Registrar Veterinaria</a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="buttons.html">Buscar Veterinaria</a>--}}
                    {{--</li>--}}
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Reportes</span></a>
                <ul>
                    <li>
                        <a href="{{ url('usuarios') }}">Usuario</a>
                    </li>
                    <li>
                        <a href="{{ url('rfid_dt') }}">RFID</a>
                    </li>
                    <li>
                        <a href="{{ url('mascotas') }}">Mascotas</a>
                    </li>
                    <li>
                        <a href="{{ url('veterinarias') }}">Veterinaria</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu">
                    <i class="fa fa-arrow-circle-left hit"></i>
                </span>

</aside>
<!-- END NAVIGATION -->