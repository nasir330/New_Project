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
                                    <div class="col-md-5 d-flex justify-content-start">
                                        <h3 class="card-title">Edit Departments</h3>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-start">
                                        @if(session()->has('delete'))
                                        <div id="deleteMessage" class="alert-danger">
                                            <span style="color:red;">{{session('delete')}}</span>
                                        </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="col-md-6 d-flex justify-content-start mb-3">
                                        <form action="{{route('update.designations')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group mb-2">
                                                    <label for="first_name">Department Name</label>
                                                    <div class="input-group">
                                                        <strong> {{$designation->departments->department}}</strong>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="first_name">Designation</label>
                                                    <div class="input-group">
                                                        <input type="hidden" name="designationtId"
                                                            value="{{$designation->id}}">
                                                        <input type="text" name="designation" class="form-control"
                                                            value="{{$designation->designation}}">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-auto">
                                                        <button class="btn btn-primary">
                                                            Update
                                                        </button>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="{{route('designations')}}"
                                                            class="btn btn-warning">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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