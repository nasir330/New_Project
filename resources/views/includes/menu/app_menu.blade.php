<div id="left-sidebar" class="sidebar">
    <div class="row">
        <div class="col-auto text-white">
           <h4>{{Auth::user()->name}}</h4>
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
                    <span>Users</span>
                </a>
                <ul>
                    <li>
                        <a href="{{route('users.list')}}">
                            <i class="fa-solid fa-user-group"></i>
                            Users List
                        </a>
                    </li>
                    <li>
                    <a href="{{route('add.staf')}}">
                            <i class="fa-solid fa-user-check"></i>

                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa-solid fa-handcuffs"></i>
                    <span>Inmate's</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-users"></i>
                            Inmate's List
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Add New
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
                    <span>Visitor's</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-people-group"></i>
                            Visitor List
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa-solid fa-user-plus"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Services menu list end -->

            <li class="g_heading">Maintenance</li>
            <!-- Maintenance menu list start -->
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                <i class="fa-solid fa-truck-field-un"></i>
                    <span>Inventory's</span>
                </a>
                <ul>
                    <li>
                        <a href="login.html">
                        <i class="fa-solid fa-list"></i>
                            Inventory List
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                        <i class="fa-solid fa-plus"></i>
                            Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="login.html">
                <i class="fa-solid fa-folder-open"></i>
                    Report
                </a>
            </li>
            <!-- Maintenance menu list end -->


        </ul>
    </nav>
</div>