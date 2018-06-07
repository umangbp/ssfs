    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin SSFS</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li><a href="{{ route('ssfs.admin.dashboard') }}"><i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('cms') }}"><i class="fa fa-circle-o text-aqua"></i> <span>CMS</span></a></li>
        <li><a href="{{ route('services.list') }}"><i class="fa fa-truck text-aqua"></i> <span>Services</span></a></li>
        <li><a href="{{ route('banner.list') }}"><i class="fa fa-group text-aqua"></i> <span>Banner</span></a></li>
        <li><a href="{{ route('careers.list') }}"><i class="fa fa-briefcase text-aqua"></i> <span>Careers</span></a></li>
        <li><a href="{{ route('team-members.list') }}"><i class="fa fa-group text-aqua"></i> <span>Team Members</span></a></li>
        <li><a href="{{ route('settings') }}"><i class="fa fa-gear text-aqua"></i> <span>Settings</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->