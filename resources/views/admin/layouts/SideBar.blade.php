<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="text-center p-3">
                            <img src="{{ asset('uploads/settings/person.png') }}" alt="Profile"
                                class="img-fluid rounded-circle border"
                                style="width: 80px; height: 80px; object-fit: cover;">

                            <h5 class="mt-2 mb-0">{{ auth()->user()->name }}</h5>
                            <small class="text-muted">{{ auth()->user()->email }}</small>
                        </div>
                    </div>
                </li>
                <li class="menu-heading">
                    <span>-- Main</span>
                </li>
                <li class="nav-item start @yield('dashboard')">
                    <a href="{{ url('/admin') }}" class="nav-link nav-toggle">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">email</i>
                        <span class="title">Location MGMT</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('admin/locations') }}" class="nav-link ">
                                <span class="title">All Location</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/locations/create') }}" class="nav-link ">
                                <span class="title">Add Location</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">email</i>
                        <span class="title">Category MGMT</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('admin/categories') }}" class="nav-link ">
                                <span class="title">All Category</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/categories/create') }}" class="nav-link ">
                                <span class="title">Add category</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">email</i>
                        <span class="title">Comapny MNGT</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/admin/companies') }}" class="nav-link ">
                                <span class="title">All Company</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/companies/create') }}" class="nav-link ">
                                <span class="title">Add Comapny</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-toggle">
                        <i class="material-icons">email</i>
                        <span class="title">Employee MGMT</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{ url('/admin/employees') }}" class="nav-link ">
                                <span class="title">All Employee</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/employees/create') }}" class="nav-link ">
                                <span class="title">Add Employee</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href={{ url('/admin/project-settings') }} class="nav-link nav-toggle">
                        <i class="material-icons">vpn_key</i>
                        <span class="title">Project Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
