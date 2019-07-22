 <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/kris.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ Request::is('homepage') ? 'active' : '' }}">
        <a href="{{route('home.index')}}">
          <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
      </li>
      <li class="{{ Request::is('category') ? 'active' : '' }} treeview">
        <a href="#">
          <i class="fa fa-database"></i> <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('category') ? 'active' : '' }}"><a href="{{route('kategori.index')}}"><i class="fa fa-circle-o"></i> Kategori</a></li>
        </ul>
      </li>
      <li  class="{{ Request::is('wisata') ? 'active' : '' }}">
        <a href="{{route('infowisata.index')}}">
          <i class="fa fa-book"></i> <span>Info Wisata</span>
        </a>
      </li>
    </ul>
  </section>