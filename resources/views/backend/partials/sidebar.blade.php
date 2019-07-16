<div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin.dashboard')}}" class="site_title"><img class="logo" src='/images/logo.png'></a>
          </div>

          <div class="clearfix"></div>

        
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{auth()->user()->name}}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
              <li><a href="{{route('bus.index')}}"><i class="fa fa-home"></i>Home</a></li>
              <li><a href="{{route('bus.index')}}"><i class="fa fa-bus"></i>Buses</a></li>
              <li><a href="{{route('operator.index')}}"><i class="fa fa-bus"></i>Operators</a></li>
              <li><a href="/admin/passenger"><i class="fa fa-list"></i>passengers</a></li>
              <li><a href="/admin/booking"><i class="fa fa-list"></i>Bookings</a></li>
              {{-- <li><a><i class="fa fa-bar-chart-o"></i> statistics </a></li> --}}

              <i class="fas fa-user-alt"></i>
              <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="/admin/admins">Admins</a></li>
                  <li><a href="/admin/users">Users</a></li>
                </ul>
              </li>
              </ul>
            </div>
          </div>
         
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        
        </div>
      </div>