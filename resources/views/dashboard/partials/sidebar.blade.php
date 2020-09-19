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
                                NABEEL
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

            @isset($sidebarNavs)
                @foreach($sidebarNavs as $sidebarNav)
                    <li class="{{ ( request()->is($sidebarNav['route_active'].'*') ) ? 'active' : '' }}">
                        <a href="{{ $sidebarNav['children'] ? 'javascript:void(0)' : $sidebarNav['route'] }}">
                            <i class="fa-fw {{ $sidebarNav['icon'] }}"></i>
                            <span class="nav-label">
                                {{ $sidebarNav['title'] }}
                            </span>
                            @if($sidebarNav['children'])
                                <span class="fa-fw fa arrow"></span>
                            @endif
                        </a>
                        @if($sidebarNav['children'])
                            <ul class="nav nav-second-level collapse">
                                @foreach($sidebarNav['children'] as $levelTwoNav)
                                    <li class="{{ (request()->is($levelTwoNav['route_active'].'*') || request()->routeIs($levelTwoNav['route_name'])) ? 'active' : '' }}">
                                        <a href="{{ $levelTwoNav['children'] ? 'javascript:void(0)' : $levelTwoNav['route'] }}">
                                            <i class="fa-fw {{ $levelTwoNav['icon'] }}"></i>
                                            <span class="nav-label custom-nav-label">
                                                {{ $levelTwoNav['title'] }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endisset
        </ul>
    </div>
</nav>
