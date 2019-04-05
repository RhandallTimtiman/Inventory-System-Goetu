<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- Employee Management -->
          <li class="nav-item has-treeview  ">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Manage Employees
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href = "/employee" class="nav-link {{ Request::is('employee') ? 'active' : '' }} ">
                  <i class="fas fa-users nav-icon"></i>
                  <p>List of Employees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/employee/create" class="nav-link {{ Request::is('employee/create') ? 'active' : '' }} ">
                  <i class="fa fa-address-card nav-icon"></i>
                  <p>Create Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/" class="nav-link">
                  <i class="fa fa-comment nav-icon"></i>
                  <p>List of Request</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Item Management -->
          <li class="nav-item has-treeview  ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-luggage-cart"></i>
              <p>
                Manage Items
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href = "/item" class="nav-link {{ Request::is('item') ? 'active' : '' }} ">
                  <i class="fas fa-list-ul nav-icon"></i>
                  <p>List of Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/item/create" class="nav-link {{ Request::is('item/create') ? 'active' : '' }} ">
                  <i class="fa fa-plus-square nav-icon"></i>
                  <p>Create Item</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/status" class="nav-link {{ Request::is('status') ? 'active' : '' }} ">
                  <i class="fas fa-info-circle nav-icon"></i>
                  <p>Status</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Unit Management -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Manage Units
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href = "/unit" class="nav-link {{ Request::is('unit') ? 'active' : '' }} ">
                  <i class="fas fa-clipboard-list nav-icon"></i>
                  <p>List of units</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/unit/create" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Create Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/location" class="nav-link">
                  <i class="fa fa-handshake nav-icon"></i>
                  <p>Assign Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/unitAddItems" class="nav-link">
                  <i class="fa fa-handshake nav-icon"></i>
                  <p>Add items to Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/inventory" class="nav-link">
                  <i class="fas fa-archive nav-icon"></i>
                  <p>Components</p>
                </a>
              </li>
              <li class="nav-item">
                <a href = "/employee" class="nav-link">
                  <i class="fas fa-microchip nav-icon"></i>
                  <p>Subcomponents</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Location Management -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-location-arrow"></i>
              <p>
                Manage Location
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
               <a href = "/location" class="nav-link {{ Request::is('location') ? 'active' : '' }} ">
                 <i class="fas fa-truck-loading nav-icon"></i>
                 <p>Location List</p>
               </a>
             </li>
             <li class="nav-item">
               <a href = "/employee" class="nav-link">
                 <i class="fas fa-users nav-icon"></i>
                 <p>Designation</p>
               </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
