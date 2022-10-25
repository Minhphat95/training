  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('employee.index')}}" class="brand-link">
      <img src="{{asset('adminlte/dist/img/logovaix1.png')}}" alt="logovaix" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">VAIX GROUP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/dist/img/iconuser.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::User()->name}}</a>
        </div>

      </div>
;
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{route('employee.index')}}" class="nav-link
              {{(Request::routeIs("employee.index") or Request::routeIs("employee.create"))?"active":false}}">
                  <p>
                      <i class="fa-solid fa-people-group"></i>
                    Nhân Viên

                  <span class="right badge badge-danger"></span>
                  </p>
              </a>
              </li>
              <li class="nav-item">
                <a href="{{route('project.index')}}" class="nav-link
                {{(Request::routeIs("project.index") or Request::routeIs("project.create"))?"active":false}}">
                    <p>
                        <i class="fa-solid fa-thin fa-diagram-project"></i>
                       Dự Án
                    <span class="right badge badge-danger"></span>
                    </p>
                </a>
                </li>
            </li>
{{--            <li class="nav-item">--}}
{{--              <a href="{{route('login/checkout')}}" class="nav-link">--}}
{{--                  <p>--}}
{{--                      <i class="fa-solid fa-regular fa-right-to-bracket"></i>--}}
{{--                      Login Check out--}}
{{--                      <span class="right badge badge-danger"></span>--}}
{{--                  </p>--}}
{{--              </a>--}}
{{--          </li>--}}
{{--            <li class="nav-item">--}}
{{--              <a href="{{route('checkout/tablet')}}" class="nav-link">--}}
{{--                  <p>--}}
{{--                      <i class="fa-solid fa-thin fa-check-to-slot"></i>--}}
{{--                    Check out--}}
{{--                  <span class="right badge badge-danger"></span>--}}
{{--                  </p>--}}
{{--              </a>--}}
{{--          </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="{{route('login/employee_dashboard')}}" class="nav-link">--}}
{{--                    <p>--}}
{{--                        <i class="fa-solid fa-regular fa-right-to-bracket"></i>--}}
{{--                        Login Employee Dashboard--}}
{{--                        <span class="right badge badge-danger"></span>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--                <li class="nav-item">--}}
{{--                  <a href="#" class="nav-link">--}}
{{--                      <p>--}}
{{--                          <i class="fa-solid fa-regular fa-gauge"></i>--}}
{{--                        Employee Dashboard--}}
{{--                      <span class="right badge badge-danger"></span>--}}
{{--                      </p>--}}
{{--                  </a>--}}
{{--                </li>--}}
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link">
                    <p>
                        <i class="fa-solid fal fa-sign-out-alt"></i>
                        Logout
                        <span class="right badge badge-danger"></span>
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

