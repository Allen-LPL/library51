  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{URL::route('admin.book.index')}}"><i class="fa fa-book"></i> <span>图书管理</span>
          </a></li>
        <li><a href="{{URL::route('admin.cate.index')}}"><i class="fa fa-circle-o"></i> <span>分类管理</span></a></li>
        <li><a href="{{URL::route('admin.borrow.index')}}"><i class="fa fa-edit"></i> <span>借书管理</span></a></li>
        <li><a href="{{URL::route('admin.tags.index')}}"><i class="fa fa-tags"></i> <span>标签管理</span></a></li>
        {{--<li><a href="{{ url('/admin/system/index') }}"><i class="fa fa-link"></i> <span>基本设置</span></a></li>--}}
        {{--<li><a href="{{ url(route('admin.nav.index')) }}"><i class="fa fa-link"></i> <span>导航设置</span></a></li>--}}
        {{--<li><a href="{{ url(route('admin.links.index')) }}"><i class="fa fa-link"></i> <span>友链管理</span></a></li>--}}
        <li><a href="{{ URL::route('admin.user.index')}}"><i class="fa fa-users"></i> <span>管理员列表</span></a></li>

        {{--多级管理--}}
        {{--<li class="treeview">--}}
          {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
            {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
          {{--</a>--}}
          {{--<ul class="treeview-menu">--}}
            {{--<li><a href="#">Link in level 2</a></li>--}}
            {{--<li><a href="#">Link in level 2</a></li>--}}
          {{--</ul>--}}
        {{--</li>--}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

