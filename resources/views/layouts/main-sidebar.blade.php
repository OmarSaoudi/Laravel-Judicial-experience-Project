<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('Main_trans.online') }}</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="{{ trans('Main_trans.search') }}">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">{{ trans('Main_trans.main_navigation') }}</li>
      <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('Main_trans.dashboard') }}</span></a></li>
      <li class="header">{{ trans('Main_trans.master') }}</li>
      <li><a href="{{ route('judicials.index') }}"><i class="fa fa-legal"></i> <span>{{ trans('Main_trans.judicial_experience') }}</span></a></li>
      <li><a href="{{ route('settings.index') }}"><i class="fa fa-cog"></i> <span>{{ trans('Main_trans.settings') }}</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
