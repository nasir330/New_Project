<div id="left-sidebar" class="sidebar">
    <div class="row">
        <div class="col-auto text-white">
            <h4>{{Auth::user()->employees->firstName. ' '.Auth::user()->employees->lastName }}</h4>
        </div>
        <!-- <div class="col-auto d-flex justify-content-end">
            <a href="javascript:void(0)" class="menu_option float-right">
                <i style="font-size:22px;" class="fa-solid fa-bars" data-toggle="tooltip" data-placement="left"
                    title="Grid & List Toggle"></i>
            </a>
        </div> -->
    </div>
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
            <li class="g_heading">Management</li>
            <!-- Management menu list start -->
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Employee</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('add.employee')}}">
                            <i class="fa-solid fa-user-check"></i>
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="{{route('employee.list')}}">
                            <i class="fa-solid fa-user-group"></i>
                            Employee List
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-handcuffs"></i>
                    <span>Attendance</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-users"></i>
                            Daily Attendance
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Attendance Report
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-handcuffs"></i>
                    <span>Leaves</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-users"></i>
                            Add Leaves
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Manage Leaves
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-handcuffs"></i>
                    <span>Payrolls</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-users"></i>
                            Payscale
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Monthly
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-handcuffs"></i>
                    <span>Holidays</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-users"></i>
                            Add Holiday
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Manage Holiday
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Management menu list end -->

            <li class="g_heading">Services</li>
            <!-- Services menu list start -->
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-people-group"></i>
                    <span>Settings</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-people-group"></i>
                            Company Details
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Departments
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Designation
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Allowance & Deduction
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Payscale
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Leave Type
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Shift
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Services menu list end -->

            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-truck-field-un"></i>
                    <span>Managers</span>
                </a>               
            </li>
            <li>
                <a href="login.html">
                    <i class="fa-solid fa-folder-open"></i>
                    Activity Log
                </a>
            </li>

        </ul>
    </nav>
</div>