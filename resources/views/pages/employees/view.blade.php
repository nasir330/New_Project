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
                                        {{$employee->employees->departments->department}} <br>
                                        <span style="font-size:16px;">
                                            {{$employee->employees->departments->designations->designation}}
                                        </span>
                                    </h4>
                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill"
                                            href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home"
                                            aria-selected="true">Personal Information</a>
                                        <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill"
                                            href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile"
                                            aria-selected="false">Company Information</a>
                                        <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill"
                                            href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages"
                                            aria-selected="false">Financial</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    {{'Personal Details'}}
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="vert-tabs-tabContent">
                                        <div class="tab-pane text-left fade show active" id="vert-tabs-home"
                                            role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada
                                            lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam
                                            ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor
                                            felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi,
                                            vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique
                                            senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu
                                            lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim
                                            sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin
                                            porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus
                                            pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum
                                            at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                                        </div>
                                        <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                                            aria-labelledby="vert-tabs-profile-tab">
                                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris
                                            pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in
                                            faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas
                                            sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere
                                            purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at,
                                            posuere nec nunc. Nunc euismod pellentesque diam.
                                        </div>
                                        <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                                            aria-labelledby="vert-tabs-messages-tab">
                                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris.
                                            Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa
                                            eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer
                                            vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit
                                            condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis
                                            velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum
                                            odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla
                                            lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum
                                            metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac
                                            ornare magna.
                                        </div>
                                        <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
                                            aria-labelledby="vert-tabs-settings-tab">
                                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna,
                                            iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor.
                                            Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique.
                                            Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat
                                            urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at
                                            consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse
                                            platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                        </div>
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