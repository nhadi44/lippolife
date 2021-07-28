      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('admin')}}" class="nav-link {{(request()->is('admin')) ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          </li>
          <li class="nav-header">DATA PROCESSING</li>
          <li class="nav-item">
            <a href="{{url('report')}}" class="nav-link {{request()->is('report') ? 'active': ''}}">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Employee Report
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('management')}}" class="nav-link {{request()->is('management') ? 'active' : ''}}">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Management
              </p>
            </a>
          </li>
          <li class="nav-header">SETTING</li>
          <li class="nav-item">
            <a href="{{url('setting')}}" class="nav-link {{request()->is('setting') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>User Management</p>
            </a>
          </li>
        </ul>
      </nav>