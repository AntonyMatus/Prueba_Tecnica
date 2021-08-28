<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <h4 class="logo-text">Treiber App</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>

                <li>
                    <a href="{{ Asset(env('admin').'/home') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Inicio
                        </a>
                </li>


                <li>
                    <a href="{{ Asset(env('admin').'/setting') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Configuraciones
                    </a>
                </li>

                <li>
                    <a href="{{ Asset(env('admin').'/category') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Categorias
                    </a>
                </li>


            </ul>
        </li>


        <li>
            <a href="{{ Asset(env('admin').'/adminUser') }}">
                <div class="parent-icon"><i class='lni lni-users'></i>
                </div>
                <div class="menu-title">Sub-Cuentas</div>
            </a>
        </li>

        <li>
            <a href="{{ Asset(env('admin').'/city') }}">
                <div class="parent-icon"><i class='lni lni-map-marker'></i>
                </div>
                <div class="menu-title">Administrar Ciudades</div>
            </a>
        </li>

        <li>
            <a href="{{ Asset(env('admin').'/offer') }}">
                <div class="parent-icon"><i class='lni lni-offer'></i>
                </div>
                <div class="menu-title">Ofertas de descuento</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Conductores</div>
            </a>
            <ul>
                <li>
                    <a href="{{ Asset(env('admin').'/delivery') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Listado
                        </a>
                </li>
                <li>
                    <a href="{{ Asset(env('admin').'/report_staff') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Reportes
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ Asset(env('admin').'/push') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-send'></i>
                </div>
                <div class="menu-title">Notificaciones</div>
            </a>
        </li>

        <li>
            <a href="{{ Asset(env('admin').'/report') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-file'></i>
                </div>
                <div class="menu-title">Reportes de ventas</div>
            </a>
        </li>

        <li>
            <a href="{{ Asset(env('admin').'/appUser') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-user-plus'></i>
                </div>
                <div class="menu-title">Usuarios Registrados</div>
            </a>
        </li>

        <li>
            <a href="{{ Asset(env('admin').'/logout') }}">
                <div class="parent-icon"><i class='fadeIn animated bx bx-log-out-circle'></i>
                </div>
                <div class="menu-title">Cerrar Sesion</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
