<div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="{{url('/dashboard')}}">
                            <div class="logo-img">
                              
                            </div>
                            <span class="text">THE HUB</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                @if(auth()->check()&& auth()->user()->role->name === 'Administrator')
                                <div class="nav-lavel">Admin Module</div>
                                @endif
                                @if(auth()->check()&& auth()->user()->role->name === 'CSO')
                                <div class="nav-lavel">CSO Module</div>
                                @endif
                                @if(auth()->check()&& auth()->user()->role->name === 'Assignee')
                                <div class="nav-lavel">Assignee Module</div>
                                @endif
                                @if(auth()->check()&& auth()->user()->role->name === 'CSM')
                                <div class="nav-lavel">CSM Module</div>
                                @endif
                                 @if(auth()->check()&& auth()->user()->role->name === 'Finance Supervisor')
                                <div class="nav-lavel">Financer Module</div>
                                @endif
                                <div class="nav-item active">
                                    <a href="{{url('dashboard')}}"><i class="ik ik-bar-chart-2"></i><span>Dashboard (Overview)</span></a>
                                </div>
                              <!-- <div class="nav-item">
                                    <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                                </div> -->

                            @if(auth()->check()&& auth()->user()->role->name === 'Administrator')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Department</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route
                                        ('department.create')}}" class="menu-item">Create</a>
                                        <a href="{{route
                                        ('department.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>

                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Branch</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route
                                        ('branch.create')}}" class="menu-item">Create</a>
                                        <a href="{{route
                                        ('branch.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>

                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Priority</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('priority.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('priority.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Touch Point</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('point.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('point.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>User Administration</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('doctor.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('doctor.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Complaints</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('admin.view')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Suggestions</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('doctor.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('doctor.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Query Type</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('query.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('query.index')}}" class="menu-item">View</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Reports</span></a>
                                <div class="submenu-content" style="">
                                    <a href="javascript:void(0)" class="menu-item">Users</a>
                                    <div class="nav-item has-sub">
                                        <a href="javascript:void(0)" class="menu-item">Complaints</a>
                                        <div class="submenu-content">
                                            <a href="{{route('low.priority')}}" class="menu-item">Low Priority</a>
                                        </div>
                                        <div class="submenu-content">
                                            <a href="{{route('medium.priority')}}" class="menu-item">Medium Priority</a>
                                        </div>
                                        <div class="submenu-content">
                                            <a href="{{route('high.priority')}}" class="menu-item">High Priority</a>
                                        </div>
                                        <div class="submenu-content">
                                            <a href="{{route('progress.status')}}" class="menu-item">Complaints: In Progress</a>
                                        </div>
                                        <div class="submenu-content">
                                            <a href="{{route('resolved.status')}}" class="menu-item">Complaints: Resolved</a>
                                        </div>
                                        <div class="submenu-content">
                                            <a href="{{route('received.status')}}" class="menu-item">Complaints: Received</a>
                                        </div>
                                        <div class="submenu-content">
                                            <a href="{{route('not.status')}}" class="menu-item">Complaints: Not Reviewed</a>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="menu-item">Suggestions</a>
                                </div>
                             </div>
                             @endif
                            @if(auth()->check()&& auth()->user()->role->name === 'CSO')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Customer Incidents</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('complaint.create')}}" class="menu-item">Create Incident</a>
                                        <a href="{{route('cso.view')}}" class="menu-item">View Incidents</a>
                                       
                                    </div>
                                </div>
                                
                            @endif
                            @if(auth()->check()&& auth()->user()->role->name === 'Assignee')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Customer Incidents</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('complaint.assignee')}}" class="menu-item">View Incident</a>   
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Call Center Record</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('callcenter.assignee')}}" class="menu-item">View</a>
                                    </div>
                                </div>
                                
                            @endif

                            @if(auth()->check()&& auth()->user()->role->name === 'CSM')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Customer Incidents</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('csm.complaints')}}" class="menu-item">Track Incident</a>   
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Call Center Record</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('csm.records')}}" class="menu-item">Track</a>
                                    </div>
                                </div>
                                

                                
                            @endif
                            @if(auth()->check()&& auth()->user()->role->name === 'Finance Supervisor')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Claims (Customer Incidence)</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('complaint.finance')}}" class="menu-item">View</a>   
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Claims (Call Records)</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('callcenter.finance')}}" class="menu-item">View</a>   
                                    </div>
                                </div>
                                
                                
                                

                                
                            @endif
                               
                               <!-- @if(auth()->check()&& auth()->user()->role->name === 'admin')
                                   <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Appointment Time</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('appointment.create')}}" class="menu-item">Create</a>
                                        <a href="{{route('appointment.index')}}" class="menu-item">Check</a>
                                       
                                    </div>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Patients</span> <span class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{route('patients.today')}}" class="menu-item">Patients(today)</a>
                                        <a href="{{route('prescribed.patients')}}" class="menu-item">All patients(prescription)</a>
                                       
                                    </div>
                                </div>
                               @endif-->
                                
                                

                                <div class="nav-item active">
                                    <a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="ik ik-power dropdown-icon"></i><span>Logout</span></a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                           
                                
                            </nav>
                        </div>
                    </div>
                </div>