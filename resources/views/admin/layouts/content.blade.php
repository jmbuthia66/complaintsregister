    <script src="{{ asset('js/app.js') }}"defer></script>

<div class="main-content" id="app">

                    @if(auth()->check()&& auth()->user()->role->name === 'Administrator')
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-server bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>User Tracker</h5>
                                            <span>Ensures you are up to date with current users</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Apps</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Taskboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card task-board">
                                    <div class="card-header">
                                        <h3>CS Officers</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body todo-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                @foreach(App\Models\User::where('role_id',2)->latest()->limit(10)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>{{$c->id}} {{$c->name}}</h6>
                                                        <p>{{$c->department}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Assignee/Supervisor</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body progress-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                @foreach(App\Models\User::where('role_id',3)->latest()->limit(10)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>{{$c->id}} {{$c->name}}</h6>
                                                        <p>{{$c->department}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Administrator</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body completed-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                            @foreach(App\Models\User::where('role_id',1)->latest()->limit(10)->get() as $c)                                   
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">                                        
                                                        <h6>{{$c->name}}</h6>
                                                        <p>{{$c->department}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="container-fluid">
                        <div class="page-header">
                                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-inbox bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Admin Overview</h5>
                                            <span>Summary of the Data</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Over View</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            </div>
                        <div class="row clearfix">
                            @if(auth()->check()&& auth()->user()->role->name === 'Administrator')
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>CSOs</h6>
                                                <h2>{{App\Models\User::where('role_id','=',2)->count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-users"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Admin Users</h6>
                                                <h2>{{App\Models\User::where('role_id',1)->count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-user-plus"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block"></small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Roles</h6>
                                                <h2>{{App\Models\Role::count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-user-check"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Complaints</h6>
                                                <h2>{{App\Models\Complaint::count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-message-square"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                            </div>

                               <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>CSMs</h6>
                                                <h2>{{App\Models\User::where('role_id',"=",4)->count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-align-justify"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Departments</h6>
                                                <h2>{{App\Models\Department::count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-home"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Supervisors</h6>
                                                <h2>{{App\Models\User::where('role_id',"=",3)->count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-home"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Branches</h6>
                                                <h2>{{App\Models\Branch::count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-home"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                              </div>
                              @endif



                              @if(auth()->check()&& auth()->user()->role->name === 'Admin')
                              <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Complaints Today:</h6>
                                                <h2>{{App\Models\Complaint::whereDate('created_at', '=', Carbon\Carbon::today()->toDateString())->count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-home"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Suggestions Today:</h6>
                                                <h2>{{App\Models\Complaint::count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-home"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Suggestions In Total:</h6>
                                                <h2>{{App\Models\Complaint::count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-home"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Complaints Total:</h6>
                                                <h2>{{App\Models\Complaint::count()}}</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-home"></i>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                              </div>
                              
                              @endif


                        </div>
                    </div><br>
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                    <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Complaints</h5>
                                        <span>Short Summary of Complaints</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Complaints</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        </div>
                      <div class="row clearfix">
                       
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-danger">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Not Reviewed</h6>
                                            <h2>{{App\Models\Complaint::where('status','Not Reviewed')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-primary">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Recieved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Received')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-warning">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>In Progress</h6>
                                            <h2>{{App\Models\Complaint::where('status','In Progress')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-success">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Resolved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Resolved')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}} </h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="container-fluid">
                        
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                    <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Call Records</h5>
                                        <span>Short Summary of Call Records </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Call Records </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        </div>
                      <div class="row clearfix">
                       
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-primary">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Open</h6>
                                            <h2>{{App\Models\CallCenter::where('status','Open')->count()}}/{{App\Models\CallCenter::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-success">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Closed</h6>
                                            <h2>{{App\Models\CallCenter::where('status','Closed')->count()}}/{{App\Models\CallCenter::count()}} </h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            
                        </div>
                        
                      
                    </div>
                        </div>
                
                    
                    @endif

                     @if(auth()->check()&& auth()->user()->role->name === 'CSO')
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-server bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Task Progress for Your Customer Incidents</h5>
                                            <span>Ensures you are up to date with current customer incidences you registered</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Incident</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Taskboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card task-board">
                                    <div class="card-header">
                                        <h3>Received</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body todo-task">
                                        <div class="dd" data-plugin="nestable">
                                           
                                            <ol class="dd-list">
                                                @foreach(App\Models\Complaint::where('status','Received')->where('name',auth()->user()->name)->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>{{$c->subject}}</h6>
                                                        <p>{{$c->complaint}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>In Progress</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body progress-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                @foreach(App\Models\Complaint::where('status','In Progress')->where('name',auth()->user()->name)->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>{{$c->subject}}</h6>
                                                        <p>{{$c->complaint}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Resolved</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body completed-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                            @foreach(App\Models\Complaint::where('status','Resolved')->where('name',auth()->user()->name)->latest()->limit(4)->get() as $c)                                   
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">                                        
                                                        <h6>{{$c->subject}}</h6>
                                                        <p>{{$c->complaint}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                    <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Customer Incidents</h5>
                                        <span>Short Summary of Incidents</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Incidents</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        </div>
                      <div class="row clearfix">
                       
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-danger">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Not Reviewed</h6>
                                            <h2>{{App\Models\Complaint::where('status','Not Reviewed')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-primary">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Recieved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Received')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-warning">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>In Progress</h6>
                                            <h2>{{App\Models\Complaint::where('status','In Progress')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-success">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Resolved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Resolved')->where('name',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('name',auth()->user()->name)->count()}} </h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                    
                  


                    @endif

                   @if(auth()->check()&& auth()->user()->role->name === 'Assignee')
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-server bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Task Progress for You From Customer Incidents</h5>
                                            <span>Ensures your Assigned Tasks are highlighted</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Incidents</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Taskboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card task-board">
                                    <div class="card-header">
                                        <h3>My Not Reviewed Tasks</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body todo-task">
                                        <div class="dd" data-plugin="nestable">
                                           
                                            <ol class="dd-list">
                                                @foreach(App\Models\Complaint::where('status','Not Reviewed')->where('assignee',auth()->user()->name)->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>{{$c->subject}}</h6>
                                                        <h6>T000{{$c->id}}</h6>
                                                        <p>{{$c->complaint}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>In Progress Tasks</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body progress-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                @foreach(App\Models\Complaint::where('status','In Progress')->where('assignee',auth()->user()->name)->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>{{$c->subject}}</h6>
                                                        <h6>T000{{$c->id}}</h6>
                                                        <p>{{$c->complaint}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Resolved Tasks</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body completed-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                            @foreach(App\Models\Complaint::where('status','Resolved')->where('assignee',auth()->user()->name)->latest()->limit(4)->get() as $c)                                   
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">                                        
                                                        <h6>{{$c->subject}}</h6>
                                                        <h6>T000{{$c->id}}</h6>
                                                        <p>{{$c->complaint}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br><br>
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                    <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Customer Incidents for {{Auth()->user()->name}}</h5>
                                        <span>Tally of your Incidents Assigned to You</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Customer Incidents</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        </div>
                      <div class="row clearfix">
                       
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-danger">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Not Reviewed</h6>
                                            <h2>{{App\Models\Complaint::where('status','Not Reviewed')->where('assignee',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('assignee',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-primary">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Recieved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Received')->where('assignee',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('assignee',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-warning">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>In Progress</h6>
                                            <h2>{{App\Models\Complaint::where('status','In Progress')->where('assignee',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('assignee',auth()->user()->name)->count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-success">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Resolved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Resolved')->where('assignee',auth()->user()->name)->count()}}/{{App\Models\Complaint::where('assignee',auth()->user()->name)->count()}} </h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     
                    @endif

                    @if(auth()->check()&& auth()->user()->role->name === 'CSM')
                    
                <div class="container-fluid"> 
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Customer Incidents</h5>
                                        <span>Short Summary of Customer Incidents</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                        <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                        <a href="#">Customer Incidents</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                       
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-danger">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Not Reviewed</h6>
                                            <h2>{{App\Models\Complaint::where('status','Not Reviewed')->count()}}/{{App\Models\Complaint::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-primary">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Recieved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Received')->count()}}/{{App\Models\Complaint::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-warning">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>In Progress</h6>
                                            <h2>{{App\Models\Complaint::where('status','In Progress')->count()}}/{{App\Models\Complaint::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-success">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Resolved</h6>
                                            <h2>{{App\Models\Complaint::where('status','Resolved')->count()}}/{{App\Models\Complaint::count()}} </h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br><br><br>
                    <div class="page-header">
                        <div class="row align-items-end">
                                <div class="col-lg-8">
                                        <div class="page-header-title">
                                        <i class="ik ik-inbox bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>TAT Progress (Overdue)</h5>
                                            <span>From Complaints </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Complaints </a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">TAT</li>
                                        </ol>
                                    </nav>
                                </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>4 Days Or More</h3>
                                    <h3>(High Prioirity)</h3>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                            <li><i class="ik ik-minus minimize-card"></i></li>
                                            <li><i class="ik ik-x close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body feeds-widget">
                                    @foreach(App\Models\Complaint::where('created_at','<=',Carbon\Carbon::now()->subDays(4)->toDateTimeString())->where('priority','High')->where('status','!=','Resolved')->latest()->limit(10)->get() as $c)
                                    <div class="feed-item">
                                    <a href="#">
                                        <div class="feeds-left"><i class="ik ik-alert-circle text-warning"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">T000{{$c->id}} 
                                                <small class="float-right text-muted">{{$c->created_at}}</small>
                                            </h4>
                                            <small>{{$c->subject}}</small>
                                        </div>
                                    </a>
                                </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>5 Days Or More</h3>
                                    <h3>(Medium Prioirity)</h3>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                            <li><i class="ik ik-minus minimize-card"></i></li>
                                            <li><i class="ik ik-x close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body feeds-widget">
                                    @foreach(App\Models\Complaint::where('created_at','<=',Carbon\Carbon::now()->subDays(5)->toDateTimeString())->where('priority','Medium')->where('status','!=','Resolved')->latest()->limit(10)->get() as $c)
                                    <div class="feed-item">
                                    <a href="#">
                                        <div class="feeds-left"><i class="ik ik-alert-circle text-warning"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">T000{{$c->id}} 
                                                <small class="float-right text-muted">{{$c->created_at}}</small>
                                            </h4>
                                            <small>{{$c->subject}}</small>
                                        </div>
                                    </a>
                                </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>6 Days Or More</h3>
                                    <h3>(Low Prioirity)</h3>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                            <li><i class="ik ik-minus minimize-card"></i></li>
                                            <li><i class="ik ik-x close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body feeds-widget">
                                    @foreach(App\Models\Complaint::where('created_at','<=',Carbon\Carbon::now()->subDays(6)->toDateTimeString())->where('priority','Low')->where('status','!=','Resolved')->latest()->limit(10)->get() as $c)
                                    <div class="feed-item">
                                    <a href="#">
                                        <div class="feeds-left"><i class="ik ik-alert-circle text-warning"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">T000{{$c->id}} 
                                                <small class="float-right text-muted">{{$c->created_at}}</small>
                                            </h4>
                                            <small>{{$c->subject}}</small>
                                        </div>
                                    </a>
                                </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>   
                    </div>
                    

                </div>
                      
                    
                    
                    
        
                     
                    @endif
                    @if(auth()->check()&& auth()->user()->role->name === 'Finance Supervisor')
                    
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-server bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tickets From Claims (Complaints)</h5>
                                            <span>Ticket Overview</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Claims</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Tickets Overview</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card task-board">
                                    <div class="card-header">
                                        <h3>In Progress Tasks</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body todo-task">
                                        <div class="dd" data-plugin="nestable">
                                           
                                            <ol class="dd-list">
                                                @foreach(App\Models\Complaint::where('status','In Progress')->where('finance_assignee',auth()->user()->name)->where('finance','Yes')->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>T000{{$c->id}}</h6>
                                                        <h6>{{$c->department}}</h6>
                                                        <p>Sent By: {{$c->sent_by}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Resolved Tasks</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body completed-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                @foreach(App\Models\Complaint::where('status','Resolved')->where('finance_assignee',auth()->user()->name)->where('finance','Yes')->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>T000{{$c->id}}</h6>
                                                        <h6>{{$c->department}}</h6>
                                                        <p>Sent By: {{$c->sent_by}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-server bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Tickets From Claims (Call Center)</h5>
                                            <span>Ticket Overview</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Claims</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Tickets Overview</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card task-board">
                                    <div class="card-header">
                                        <h3>In Progress Tasks</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body todo-task">
                                        <div class="dd" data-plugin="nestable">
                                           
                                            <ol class="dd-list">
                                                @foreach(App\Models\CallCenter::where('status','Open')->where('finance_assignee',auth()->user()->name)->where('finance','Yes')->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>CR000{{$c->id}}</h6>
                                                        <h6>{{$c->query}}</h6>
                                                        <p>Sent By: {{$c->sent_by}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Resolved Tasks</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-rotate-cw reload-card" data-loading-effect="pulse"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body completed-task">
                                        <div class="dd" data-plugin="nestable">
                                            <ol class="dd-list">
                                                @foreach(App\Models\CallCenter::where('status','Closed')->where('finance_assignee',auth()->user()->name)->where('finance','Yes')->latest()->limit(4)->get() as $c)
                                                <li class="dd-item" data-id="1">
                                                    <div class="dd-handle">
                                                        <h6>CR000{{$c->id}}</h6>
                                                        <h6>{{$c->query}}</h6>
                                                        <p>Sent By: {{$c->sent_by}}</p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    
                     
                    @endif

                    @if(auth()->check()&& auth()->user()->role->name === 'Admin')
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                    <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Complaints</h5>
                                        <span>Short Summary of Complaints</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Complaints</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        </div>
                      <div class="row clearfix">
                        @if(auth()->check()&& auth()->user()->role->name === 'Admin')
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-danger">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Not Reviewed</h6>
                                            <h2>{{App\Models\Complaint::where('status',"=","Not Reviewed")->count()}}/{{App\Models\Complaint::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-primary">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Recieved</h6>
                                            <h2>{{App\Models\Complaint::where('status',"=","Received")->count()}}/{{App\Models\Complaint::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-warning">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>In Progress</h6>
                                            <h2>{{App\Models\Complaint::where('status',"=","In Progress")->count()}}/{{App\Models\Complaint::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget bg-success">
                                <div class="widget-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="state">
                                            <h6>Resolved</h6>
                                            <h2>{{App\Models\Complaint::where('status',"=","Resolved")->count()}}/{{App\Models\Complaint::count()}}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="ik ik-box"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endif
                    @if(auth()->check()&& auth()->user()->role->name === 'Admin')
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Per Category</h5>
                                        <span>Most Complaints Per Category</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Categories</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        </div>
                      <div class="row clearfix">
                        @if(auth()->check()&& auth()->user()->role->name === 'Admin')
                        <div class="col-xl-4 col-md-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="mb-25">Branches</h6>
                                            <h3 class="fw-700 text-green">{{App\Models\Complaint::select('branch')
                                                                ->groupBy('branch')
                                                                ->orderByRaw('COUNT(*) DESC')
                                                                ->limit(1)
                                                                ->count()}} Complaints</h3>
                                            <p class="mb-0">{{App\Models\Complaint::select('branch')->groupBy('branch')->orderByRaw('COUNT(*) DESC')->limit(1)->get()}}</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bullseye bg-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <div class="col-xl-4 col-md-12">
                                <div class="card comp-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-25">Department</h6>
                                                <h3 class="fw-700 text-blue">{{App\Models\Complaint::select('department')
                                                                ->groupBy('department')
                                                                ->orderByRaw('COUNT(*) DESC')
                                                                ->limit(1)
                                                                ->count()}} Complaints </h3>
                                                <p class="mb-0">{{App\Models\Complaint::select('department')->groupBy('department')->orderByRaw('COUNT(*) DESC')->limit(1)->get()}}</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-eye bg-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="mb-25">Customer</h6>
                                            <h3 class="fw-700 text-yellow"> {{App\Models\Complaint::select('client_name')
                                                                ->groupBy('client_name')
                                                                ->orderByRaw('COUNT(*) DESC')
                                                                ->limit(1)
                                                                ->count()}} Complaints  </h3>
                                            <p class="mb-0">{{App\Models\Complaint::select('client_name')->groupBy('client_name')->orderByRaw('COUNT(*) DESC')->limit(1)->get()}}</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-paper bg-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endif
                    </div>
                    @endif
                    
                    @if(auth()->check()&& auth()->user()->role->name === 'Admin')
                     <div class="container-fluid">
                         <div class="page-header">
                            <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="ik ik-inbox bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Per Category</h5>
                                        <span>Most Complaints Per Category</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Categories</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        </div>
                        <div class="card-group mb-4">
                          <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h3 class="text-success">{{App\Models\Complaint::whereDate('created_at', '=', Carbon\Carbon::today()->toDateString())->count()}}</h3>
                                        <p class="card-subtitle text-muted fw-500">Complaints For The Day</p>
                                    </div>
                                    <div class="icon"><i class="ik ik-codepen"></i></div>
                                </div>
                                <div class="progress mt-3 mb-1" style="height: 6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="text-muted f12">
                                    <span></span>
                                    <span class="float-right"></span>
                                </div>
                            </div>
                          </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h3 class="text-primary">{{App\Models\Complaint::count()}}</h3>
                                        <p class="card-subtitle text-muted fw-500">Total Complaints:</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-codepen"></i>
                                    </div>
                                </div>
                                <div class="progress mt-3 mb-1" style="height: 6px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 63%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="text-muted f12">
                                    <span></span>
                                    <span class="float-right"></span>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h3 class="text-danger">{{App\Models\Complaint::whereDate('created_at', '=', Carbon\Carbon::today()->toDateString())->count()}}</h3>
                                        <p class="card-subtitle text-muted fw-500">Suggestions For The Day</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-codepen"></i>
                                    </div>
                                </div>
                                <div class="progress mt-3 mb-1" style="height: 6px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 77%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="text-muted f12">
                                    <span></span>
                                    <span class="float-right"></span>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h3 class="text-info">{{App\Models\Complaint::count()}}</h3>
                                        <p class="card-subtitle text-muted fw-500">Total Suggestions</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-codepen"></i>
                                    </div>
                                </div>
                                <div class="progress mt-3 mb-1" style="height: 6px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 56%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="text-muted f12">
                                    <span></span>
                                    <span class="float-right"></span>
                                </div>
                            </div>
                        </div>
                     </div>
                     @endif
                   

                    
</div>
