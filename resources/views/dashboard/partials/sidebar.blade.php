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
        </ul>
    </div>
</nav>
