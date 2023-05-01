<x-header />

<body class="font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        <!-- App Left-side-menu start -->
        @include('includes.menu.app_menu')
        <!-- App Left-side-menu end -->

        <div class="page">
            <!-- top nav start -->
            @include('includes.nav.nav_menu')
            <!-- top nav end -->

            <div class="section-body mt-3">
                <div class="container-fluid">
                    <!-- sales overview start -->
                    <div class="row clearfix row-deck">
                        <div class="col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Employees List</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                    <th>Shift</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($users as $key=> $employee)
                                                <tr>
                                                    <td>{{$employee->id}}</td>
                                                    <td>{{$employee->employees->firstName. ' '.$employee->employees->lastName}}
                                                    </td>
                                                    <td>{{$employee->email}}</td>
                                                    <td>
                                                        @if(!empty($employee->employees->departments))
                                                        {{$employee->employees->departments->department}}
                                                        @else
                                                        {{'NA'}}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!empty($employee->employees->departments->designations))
                                                        {{$employee->employees->departments->designations->designation}}
                                                        @else
                                                        {{'NA'}}
                                                        @endif
                                                    </td>
                                                    <td>{{$employee->employees->shift}}</td>
                                                    <td>{{$employee->employees->status}}</td>
                                                    <td>
                                                        <div class="card-options">
                                                            <div class="dropend">
                                                                <a class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li class="dropdown-item">
                                                                        <a href="{{route('view.employee',['id'=>$employee->id])}}">
                                                                            <i class="dropdown-icon fa fa-eye"></i>
                                                                            View Details
                                                                        </a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                    <a href="{{route('edit.employee',['id'=>$employee->id])}}">
                                                                            <i class="dropdown-icon fa fa-edit"></i>
                                                                            edit
                                                                        </a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                        <a href="javascript:void(0)">
                                                                            <i class="dropdown-icon fa fa-trash"></i>
                                                                            Delete
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- sales overview end -->

                </div>
            </div>

            <div class="section-body">
                <!-- body footer start -->
                @include('templates.footer.body_footer')
                <!-- body footer end -->
            </div>
        </div>
    </div>

    <x-footer />