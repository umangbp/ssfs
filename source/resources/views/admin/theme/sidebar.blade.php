    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li><a href="{{ route('ssfs.admin.dashboard') }}"><i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('cms') }}"><i class="fa fa-circle-o text-aqua"></i> <span>CMS</span></a></li>
        <li><a href="{{ route('services.list') }}"><i class="fa fa-truck text-aqua"></i> <span>Services</span></a></li>
        <li><a href="#"><i class="fa fa-group text-aqua"></i> <span>Team</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->