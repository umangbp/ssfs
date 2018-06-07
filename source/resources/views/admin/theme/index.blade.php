@extends('admin.theme.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-group"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Team Members</span>
              <span class="info-box-number">{{ $members_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Services</span>
              <span class="info-box-number">{{ $services_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-picture-o" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Banners</span>
              <span class="info-box-number">{{ $banners_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Careers</span>
              <span class="info-box-number">{{ $careers_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">

                  @isset($members)
                  <ul class="users-list clearfix">
                    
                    @foreach($members as $member)
                    <li>
                      <img src="{{ $member->image }}" alt="{{ $member->first_name }}" style="border-radius: 0;" width="150px" height="150px">
                      <div style="padding-top: 10px">
                        <a class="users-list-name" href="#">{{$member->first_name}} {{$member->last_name}}</a>
                        <span class="users-list-date">{{ $member->designation }}</span>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                  @endisset

                  
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{ route('team-members.list') }}" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
      </div>

    </section>
 @endsection