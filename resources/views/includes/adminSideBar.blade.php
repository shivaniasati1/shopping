
    {{-- <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">UI elements</li><!-- /.menu-title -->

                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Banner</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon fa fa-th"></i>Blogs</a> --}}
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul> --}}
                {{-- </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Products</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Men</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Women</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>News</a> --}}
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul> --}}
                {{-- </li>
                <li>
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Client Logo</a> --}}
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul> --}}
                {{-- </li> --}}

                {{-- <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="menu-title">Extras</li><!-- /.menu-title --> --}}
                {{-- <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li> --}}
            {{-- </ul> --}}
        {{-- </div><!-- /.navbar-collapse --> --}}
    {{-- </nav> --}}
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('adminassets/img/sidebar-1.jpg')}}">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active  ">
              <a class="nav-link" href="{{route('admin.home')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('admin.profile')}}">
                <i class="material-icons">person</i>
                <p>Admin Profile</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('admin.addbanner')}}">
                <i class="material-icons">content_copy</i>
                <p>Banner</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('admin.blogs')}}">
                <i class="material-icons">library_books</i>
                <p>Blogs</p>
              </a>
            </li>

            {{-- <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">library_books</i>
                    <p>Products</p>
                </a>

                <div class="nav-item dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Men</a>
                  <a class="dropdown-item" href="#">Women</a>
                </div>
            </li> --}}

            <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown">
                  <i class="material-icons">shopping_cart</i>
                  <p>
                    Products
                    {{-- <i class="right fas fa-angle-left"></i> --}}
                  </p>
                </a>
                <ul class="nav dropdown-menu">
                  <li class="nav-item">
                    <a href="{{route('admin.mens')}}" class="nav-link">
                      <p>men</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('admin.womens')}}" class="nav-link">
                      <p>women</p>
                    </a>
                  </li>

                </ul>
              </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('admin.news')}}">
                <i class="material-icons">article</i>
                <p>News</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('admin.addlogos')}}">
                <i class="material-icons">bubble_chart</i>
                <p>Client Logo</p>
              </a>
            </li>
          </ul>
        </div>
    </div>

