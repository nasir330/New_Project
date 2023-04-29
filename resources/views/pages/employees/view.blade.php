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
                            <div id="boxitem" class="card">
                                <div class="card-header">
                                    {{$employee->employees->firstName.' '.$employee->employees->lastName}}
                                </div>
                                <div class="card-body">
                                    <div id="staffAvatar" class="text-center">
                                        <img src="{{asset('')}}{{$employee->employees->photo}}" class="img-fluid"
                                            alt="User Image">
                                    </div>
                                    <h4 class="text-center mt-2">{{$employee->employees->departments->department}}</h4>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong><i
                                                    class="fa-solid fa-droplet text-danger mr-1"></i>Department</strong>
                                            <strong
                                                class="float-right">{{$employee->employees->departments->department}}</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <strong><i
                                                    class="fa-solid fa-droplet text-danger mr-1"></i>Designation</strong>
                                            <strong
                                                class="float-right">{{$employee->employees->departments->designations->designation}}</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            details
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