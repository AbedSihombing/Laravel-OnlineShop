<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LaraShop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <div class="sidebar-scrollbar">
        <ul class="nav nav-sidebar flex-column sidebar-inner"  id="sidebar-menu" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview has-sub  {{ ($currentAdminMenu == 'catalog') ? 'expand active' : ''}}">
            <a href="javascript:void(0)" class="nav-link sidenav-item-link" data-toggle="collapse" data-target="#dashboard"
						aria-expanded="false" aria-controls="dashboard">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                CATALOG
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav collapse  {{ ($currentAdminMenu == 'catalog') ? 'show' : ''}}"  id="dashboard"
						data-parent="#sidebar-menu">
              <li class="nav-item {{ ($currentAdminSubMenu == 'product') ? 'active' : ''}}">
                <a href="{{ url('admin/products') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item {{ ($currentAdminSubMenu == 'category') ? 'active' : ''}}">
                <a href="{{ url('admin/categories') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item {{ ($currentAdminSubMenu == 'attribute') ? 'active' : ''}}">
                <a href="{{ url('admin/attributes') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attributes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview has-sub {{ ($currentAdminMenu == 'role-user') ? 'expand active' : ''}}">
            <a href="javascript:void(0)" data-toggle="collapse" data-target="#auth"
						aria-expanded="false" aria-controls="dashboard" class="nav-link sidenav-item-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                USERS & ROLES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav collapse {{ ($currentAdminMenu == 'role-user') ? 'show' : ''}}"  id="auth"
						data-parent="#sidebar-menu">
              <li class="nav-item {{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}">
                <a href="{{ url('admin/users') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item {{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}">
                <a href="{{ url('admin/roles')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>