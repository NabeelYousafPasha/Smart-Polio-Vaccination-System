@if($permissions!="")
<div class="blackOpacity"></div>
<div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
               <div class="topbar-left">
                  <a href="{{route('dashboard')}}" class="logo">
                  <span>
                  <img src="{{asset('img/jekoon/logo.png')}}" alt="">
                  </span>
                  <i>
                  <img src="{{asset('img/logo_sm.png')}}" alt="" height="28">
                  </i>
                  </a>
               </div>
               <div class="user-box">
             
               </div>
               <div id="sidebar-menu">
                  <ul class="metismenu" id="side-menu">
                     <li>
                        <a href="{{route('dashboard')}}">
                        <i class="fi-air-play"></i>
                        <span class="badge badge-danger badge-pill pull-right"></span>
                        <span> Dashboard </span>
                        </a>
                     </li>
                     @if(auth()->user()->role==1)
                        @if(App\User::checkAgentProjectType()=="Lead")
                        <li>
                           <a href="{{route('listLeads')}}"><i class="fi-map"></i> <span> Leads </span> </a>
                        </li>
                        @elseif(App\User::checkAgentProjectType()=="Sale")
                          <li>
                           <a href="{{route('listLeads')}}"><i class="fi-map"></i> <span> Leads </span> </a>
                        </li>
                        <li>
                           <a href="{{route('getSales')}}"><i class="fi-bar-graph"></i><span> Sales </span></a>
                        </li>
                        
                        @endif
                     @else
                     @php
                      $activeClass=Request::route()->getName()=="leadDetails"?"class=active":"" || Request::route()->getName()=="viewUpdateLead"?"class=active":"";
                     @endphp
                    @if(isset($permissions->Leads) && is_object($permissions->Leads))
                     @if($permissions->Leads->can_read==1)
                         <li>
                           <a href="{{route('listLeads')}}" {{$activeClass}}><i class="fi-map"></i> <span> Leads </span> </a>
                        </li>
                        @endif
                        @endif
                        <li>
                           <a href="{{route('getSales')}}"><i class="fi-bar-graph"></i><span> Sales </span></a>
                        </li>
                     @endif

                     @if(auth()->user()->role!=1&&auth()->user()->role!=2)

                     @php
                      $activeClass=Request::route()->getName()=="specificproject"?"class=active":"" || Request::route()->getName()=="viewUpdateProject"?"class=active":"";
                     @endphp
                     <li><a href="{{ route('listProjects') }}" {{$activeClass}}><i class="fi-paper"></i>Project</a></li>
                        @php
                      $activeClass=Request::route()->getName()=="updateCustomForm"?"class=active":"";
                     @endphp
                     <li><a href="{{ route('listCustomForms') }}" {{$activeClass}}><i class="fi-paper"></i>Forms</a></li>

                 {{--     <li>
                        <a href="roles.php"><i class="fi-target"></i><span>Roles </span> </a>
                     </li> --}}
                      @php
                      $activeClass=Request::route()->getName()=="viewUserDetails"?"class=active":"" || Request::route()->getName()=="viewEditProfilePage"?"class=active":"";
                     @endphp
                     <li>
                        <a href="{{route('getUsers')}}" {{$activeClass}}><i class="dripicons-user"></i><span>Employees </span> </a>
                     </li>
                     <li>
                        <a href="avascript: void(0);"><i class="dripicons-user-group"></i><span>Client</span><span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                          
                           <li><a href="{{ route('clients.index') }}">Users</a></li>
                           <li><a href="{{ route('clientLeadOrders.index') }}">Orders</a></li>
                        </ul>
                     </li>
                      @if(isset($permissions->Department) && is_object($permissions->Department))
                     @if($permissions->Department->can_read==1)
                      <li>
                        <a href="{{ route('listDepartment') }}"><i class="fi-map"></i><span>Department</span></a>
                        <!-- <ul class="nav-second-level" aria-expanded="false"> -->
                          
                           <!-- <li><a href="{{ route('departmentCreate') }}">Add Department</a></li> -->
                         <!--   <li><a href="{{ route('editDepartment') }}">Update Department</a></li> -->
                          <!--  <li><a href="{{ route('listDepartment') }}">Department Details</a></li> -->
                           <!-- <li><a href="{{ route('departmentDetails') }}">Search Department</a></li> -->
                        <!-- </ul> -->
                     </li>
                    @endif
                    @endif
                     <li>
                        <a href="/departmentsearchemployes" {{$activeClass}}><i class="fi-search"></i><span>Search Employees </span> </a>
                     </li>
                     <li>
                        <a href="{{ route('listRole') }}" {{$activeClass}}><i class="fi-paper"></i><span>Roles</span> </a>
                     </li> 
                     <li>
                        <a href="{{ route('features') }}" {{$activeClass}}><i class="fi-book"></i><span>Features</span> </a>
                     </li>
                     @endif
                     <!-- <li>
                        <a href="{{ route('clientLeadOrders.index') }}"><i class=" dripicons-user-id"></i><span>Client Lead Orders</span> </a>
                     </li> -->
               {{--       <li>
                        <a href="javascript: void(0);"><i class="fa fa-money"></i> <span> Users Management </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                          
                           <li><a href="userManagementProfile.php">Profiles</a></li>
                           <li><a href="sharingRules.php">Sharing Rules</a></li>
                        </ul>
                     </li> --}}
                       <li>
                        <a href="{{route('mail')}}"><i class="fa fa-envelope" aria-hidden="true"></i> <span> Mail</span></a>
                     </li>
                     <li>
                        <a href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> <span> Logout</span></a>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
            <footer class="footer">
               2018 © Jekoon.
            </footer> 
</div>
@else
<div class="blackOpacity"></div>
<div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
               <div class="topbar-left">
                  <a href="{{route('dashboard')}}" class="logo">
                  <span>
                  <img src="{{asset('img/jekoon/logo.png')}}" alt="">
                  </span>
                  <i>
                  <img src="{{asset('img/logo_sm.png')}}" alt="" height="28">
                  </i>
                  </a>
               </div>
               <div class="user-box">
             
               </div>
               <div id="sidebar-menu">
                  <ul class="metismenu" id="side-menu">
                     <li>
                        <a href="{{route('dashboard')}}">
                        <i class="fi-air-play"></i>
                        <span class="badge badge-danger badge-pill pull-right"></span>
                        <span> Dashboard </span>
                        </a>
                     </li>
                     @if(auth()->user()->role==1)
                        @if(App\User::checkAgentProjectType()=="Lead")
                        <li>
                           <a href="{{route('listLeads')}}"><i class="fi-map"></i> <span> Leads </span> </a>
                        </li>
                        @elseif(App\User::checkAgentProjectType()=="Sale")
                          <li>
                           <a href="{{route('listLeads')}}"><i class="fi-map"></i> <span> Leads </span> </a>
                        </li>
                        <li>
                           <a href="{{route('getSales')}}"><i class="fi-bar-graph"></i><span> Sales </span></a>
                        </li>
                        
                        @endif
                     @else
                     @php
                      $activeClass=Request::route()->getName()=="leadDetails"?"class=active":"" || Request::route()->getName()=="viewUpdateLead"?"class=active":"";
                     @endphp
                         <li>
                           <a href="{{route('listLeads')}}" {{$activeClass}}><i class="fi-map"></i> <span> Leads </span> </a>
                        </li>
                        <li>
                           <a href="{{route('getSales')}}"><i class="fi-bar-graph"></i><span> Sales </span></a>
                        </li>
                     @endif

                     @if(auth()->user()->role!=1&&auth()->user()->role!=2)

                     @php
                      $activeClass=Request::route()->getName()=="specificproject"?"class=active":"" || Request::route()->getName()=="viewUpdateProject"?"class=active":"";
                     @endphp
                     <li><a href="{{ route('listProjects') }}" {{$activeClass}}><i class="fi-paper"></i>Project</a></li>
                        @php
                      $activeClass=Request::route()->getName()=="updateCustomForm"?"class=active":"";
                     @endphp
                     <li><a href="{{ route('listCustomForms') }}" {{$activeClass}}><i class="fi-paper"></i>Forms</a></li>

                 {{--     <li>
                        <a href="roles.php"><i class="fi-target"></i><span>Roles </span> </a>
                     </li> --}}
                      @php
                      $activeClass=Request::route()->getName()=="viewUserDetails"?"class=active":"" || Request::route()->getName()=="viewEditProfilePage"?"class=active":"";
                     @endphp
                     <li>
                        <a href="{{route('getUsers')}}" {{$activeClass}}><i class="dripicons-user"></i><span>Employees </span> </a>
                     </li>
                     <li>
                        <a href="avascript: void(0);"><i class="dripicons-user-group"></i><span>Client</span><span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                          
                           <li><a href="{{ route('clients.index') }}">Users</a></li>
                           <li><a href="{{ route('clientLeadOrders.index') }}">Orders</a></li>
                        </ul>
                     </li>
                      <li>
                        <a href="{{ route('listDepartment') }}"><i class="dripicons-user-group"></i><span>Department</span></a>
                        <!-- <ul class="nav-second-level" aria-expanded="false"> -->
                          
                           <!-- <li><a href="{{ route('departmentCreate') }}">Add Department</a></li> -->
                         <!--   <li><a href="{{ route('editDepartment') }}">Update Department</a></li> -->
                          <!--  <li><a href="{{ route('listDepartment') }}">Department Details</a></li> -->
                           <!-- <li><a href="{{ route('departmentDetails') }}">Search Department</a></li> -->
                        <!-- </ul> -->
                     </li>
                     <li>
                        <a href="/departmentsearchemployes" {{$activeClass}}><i class="dripicons-user"></i><span>Search Employees </span> </a>
                     </li>
                     <li>
                        <a href="{{ route('listRole') }}" {{$activeClass}}><i class="dripicons-user"></i><span>Roles</span> </a>
                     </li>
                     @endif
                     <!-- <li>
                        <a href="{{ route('clientLeadOrders.index') }}"><i class=" dripicons-user-id"></i><span>Client Lead Orders</span> </a>
                     </li> -->
               {{--       <li>
                        <a href="javascript: void(0);"><i class="fa fa-money"></i> <span> Users Management </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                          
                           <li><a href="userManagementProfile.php">Profiles</a></li>
                           <li><a href="sharingRules.php">Sharing Rules</a></li>
                        </ul>
                     </li> --}}
                       <li>
                        <a href="{{route('mail')}}"><i class="fa fa-envelope" aria-hidden="true"></i> <span> Mail</span></a>
                     </li>
                     <li>
                        <a href="{{route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> <span> Logout</span></a>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
            </div>
            <footer class="footer">
               2018 © Jekoon.
            </footer> 
</div>
@endif