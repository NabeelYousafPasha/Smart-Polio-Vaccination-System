<!--  SIDEBAR -->
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span class="clear">
                        <span class="block m-t-xs text-center">
                            <a
                                href="{{ route('/') }}"
                            >
                                <strong class="font-bold">
                                {{ config('app.name', 'Laravel') }}
                                </strong>
                            </a>
                        </span>
                        <br>
                            <img
                                alt="logo"
                                class="img-responsive"
                                src="https://avatars2.githubusercontent.com/u/46818315?s=460&u=99505012704e0fe099a4ae6a1bdaee5591eba1ac&v=4"
                            />
                    </span>
                </div>
                <div class="logo-element">
                    {{ config('app.name_abbr', 'V1') }}
                </div>
            </li>

            <li class="active">
                <a href="javascript:void(0)">
                    <i class="fa-fw fa fa-dashboard"></i>
                    <span class="nav-label">
                        {{ 'Dashboard' }}
                    </span>
                </a>
            </li>

            <li class="">
                <a href="javascript:void(0)">
                    <i class="fa-fw fa fa-home"></i>
                    <span class="nav-label">
                        {{ 'Home' }}
                    </span>
                </a>
            </li>


            <li class="">
                <a href="#">
                    <i class="fa fa-book fa-fw"></i>
                    <span class="nav-label">Repository</span><span class="fa arrow fa-fw"></span>
                </a>

                <ul class="nav nav-second-level collapse">
                    <li class="">
                        <a href="/">
                            <i class="fa fa-th-list fa-fw"></i>
                            <span class="nav-label custom-nav-label">Tasks</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="/">
                            <i class="fa fa-list fa-fw"></i>
                            <span class="nav-label custom-nav-label">Sub Tasks</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
