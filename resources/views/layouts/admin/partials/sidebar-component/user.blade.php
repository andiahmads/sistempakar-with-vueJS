<ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
    <!-- Title -->
    <li class="sidebar-heading h6">Dashboard</li>
    <!-- End Title -->

{{--    <!-- Dashboard -->--}}
{{--    <li class="side-nav-menu-item">--}}
{{--        <a class="side-nav-menu-link media align-items-center" href="{{route('admin.dashboard')}}">--}}
{{--              <span class="side-nav-menu-icon d-flex mr-3">--}}
{{--                <i class="gd-dashboard"></i>--}}
{{--              </span>--}}
{{--            <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>--}}
{{--        </a>--}}
{{--    </li>--}}
{{--    <!-- End Dashboard -->--}}


    <li class="sidebar-heading h6">Examples</li>
    <!-- Authentication -->
    <li class="side-nav-menu-item side-nav-has-menu">
        <a class="side-nav-menu-link media align-items-center" href="#"
           data-target="#subPages">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-lock"></i>
              </span>
            <span class="side-nav-fadeout-on-closed media-body">Authentication</span>
            <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
            <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
        </a>

        <!-- Pages: subPages -->
        <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link" href="login.html">Login</a>
            </li>
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link" href="register.html">Register</a>
            </li>
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link" href="password-reset.html">Forgot Password</a>
            </li>
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link" href="password-reset-2.html">Forgot Password 2</a>
            </li>
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link" href="email-verification.html">Email Verification</a>
            </li>
        </ul>
        <!-- End Pages: subPages -->
    </li>
    <!-- End Authentication -->

    <!-- Settings -->
    <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="settings.html">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-settings"></i>
              </span>
            <span class="side-nav-fadeout-on-closed media-body">Settings</span>
        </a>
    </li>
    <!-- End Settings -->

    <!-- Static -->
    <li class="side-nav-menu-item">
        <a class="side-nav-menu-link media align-items-center" href="static-non-auth.html">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-file"></i>
              </span>
            <span class="side-nav-fadeout-on-closed media-body">Static page</span>
        </a>
    </li>
    <!-- End Static -->

</ul>
