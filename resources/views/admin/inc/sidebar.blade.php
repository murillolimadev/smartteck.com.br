<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.pages.slider.index') }}" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Samartteck</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        {{-- {{ echo Request::segment(2) == 'contas/pagas' ? 'verdadeiro' : 'falso' }} --}}
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.pages.slider.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>Slider</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Quem somos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.pages.missao.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Missão</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pages.visao.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visão</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pages.valores.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Valores</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.noticias.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Noticias
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.pages.client.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Clientes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.noticias.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-clock"></i>
                        <p>
                            Noticias
                        </p>
                 <i class="fas fa-angle-left right"></i> 
                    </a>
                </li>--}}

                
                <li class="nav-item">
                    <a href="{{ route('admin.pages.endereco.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Endereço
                        </p>
                        {{-- <i class="fas fa-angle-left right"></i> --}}

                    </a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="nav-item">
                        <a href="route('logout')" class="nav-link"
                            onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <i class="nav-icon fa fa-clock"></i>
                            <p>Sair</p>
                        </a>
                    </li>
                </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
