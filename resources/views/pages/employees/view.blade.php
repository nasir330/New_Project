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
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    {{$employee->employees->firstName.' '.$employee->employees->lastName}}
                                </div>
                                <div class="card-body">
                                    <div id="employeePhoto" class="text-center">
                                        <img src="{{asset('')}}{{$employee->employees->photo}}" class="img-fluid"
                                            alt="User Image">
                                    </div>
                                    <h4 class="text-center mt-2">
                                        @if(!empty($employee->employees->departments))
                                        {{$employee->employees->departments->department}} <br>
                                        <span style="font-size:16px;">
                                            {{'designation'}}
                                        </span>
                                        @else
                                        {{'NA'}}
                                        <span style="font-size:16px;">
                                            {{'na'}}
                                        </span>
                                        @endif


                                    </h4>
                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active" id="personalInfo" data-toggle="pill"
                                            href="#tab-personalInfo" role="tab" aria-controls="tab-personalInfo"
                                            aria-selected="true">Personal Information</a>
                                        <a class="nav-link" id="companyInfo" data-toggle="pill" href="#tab-companyInfo"
                                            role="tab" aria-controls="tab-companyInfo" aria-selected="false">Company
                                            Information</a>
                                        <a class="nav-link" id="financialInfo" data-toggle="pill"
                                            href="#tab-financialInfo" role="tab" aria-controls="tab-financialInfo"
                                            aria-selected="false">Financial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 tab-content" id="vert-tabs-tabContent">
                            <!-- Personal Information card start -->
                            <div class="card tab-pane text-left fade show active" id="tab-personalInfo" role="tabpanel"
                                aria-labelledby="personalInfo">
                                <div class="card-header">
                                    {{'Personal Details'}}
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <td style="width:30%;">First Name</td>
                                                    <td>{{$employee->employees->firstName}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Last Name</td>
                                                    <td>{{$employee->employees->lastName}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Fathers Name</td>
                                                    <td>{{$employee->employees->fathersName}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Gender</td>
                                                    <td>{{$employee->employees->gender}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Birth Date</td>
                                                    <td>{{$employee->employees->dob}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Contact No</td>
                                                    <td>{{$employee->employees->phone}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Present Address</td>
                                                    <td style="white-space: pre-line">
                                                        {{$employee->employees->presentAddress}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Permanent Address</td>
                                                    <td style="white-space: pre-line">
                                                        {{$employee->employees->permanentAddress}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Reference by</td>
                                                    <td>{{$employee->employees->referenceName}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Reference Contact</td>
                                                    <td>{{$employee->employees->referencePhone}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Identity Type</td>
                                                    <td>{{$employee->employees->govId}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Identity No</td>
                                                    <td>{{$employee->employees->govIdNo}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Information card end -->

                            <!-- Company Information card start -->
                            <div class="card tab-pane text-left fade" id="tab-companyInfo" role="tabpanel"
                                aria-labelledby="companyInfo">
                                <div class="card-header">
                                    {{'Company Information'}}
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <td style="width:30%;">Department</td>
                                                    <td>

                                                        @if(!empty($employee->employees->departments))
                                                        {{$employee->employees->departments->department}}
                                                        @else
                                                        {{'NA'}}
                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Designation</td>
                                                    <td>
                                                        @if(!empty($employee->employees->departments->designations))
                                                        {{$employee->employees->departments->designations->designation}}
                                                        @else
                                                        {{'NA'}}
                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Join Date</td>
                                                    <td>{{$employee->employees->joinDate}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Leave Date</td>
                                                    <td>{{$employee->employees->leaveDate}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Status</td>
                                                    <td>{{$employee->employees->status}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Shift</td>
                                                    <td>{{$employee->employees->shift}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Hiring Manager</td>
                                                    <td>{{$employee->employees->hiringManager}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Company Information card end -->

                            <!-- Financial Information card start -->
                            <div class="card tab-pane text-left fade" id="tab-financialInfo" role="tabpanel"
                                aria-labelledby="financialInfo">
                                <div class="card-header">
                                    {{'Financial Information'}}
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <td style="width:30%;">Payscale Type</td>
                                                    <td>{{$employee->financials->salaryType}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Payscale</td>
                                                    <td>{{$employee->financials->payScale}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Account Holder Name</td>
                                                    <td>{{$employee->financials->accHolderName}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Account No</td>
                                                    <td>{{$employee->financials->accNumber}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Bank Name</td>
                                                    <td>{{$employee->financials->bankName}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Branch Name</td>
                                                    <td>{{$employee->financials->branch}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="width:30%;">Branch Code</td>
                                                    <td>{{$employee->financials->branchCode}}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Financial Information card end -->
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