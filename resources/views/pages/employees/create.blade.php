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
                    <!-- box menu start -->
                    @include('includes.menu.box_menu')
                    <!-- box menu end -->
                    <!-- sales overview start -->
                    <div class="row clearfix row-deck">
                        <div class="col mb-2">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3 class="card-title">Create Staff Account</h3>
                                    @if(session()->has('success'))
                                    <div id="successMessage" class="text-center text-success p-2 ml-3">
                                        <span style="color:green;">{{session('success')}}</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form action="{{route('add.employee')}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card-header">
                                                    personal details
                                                </div>
                                                <div class="card-body">
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <label for="first_name" class="mb-0">First Name</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="first_name"
                                                                    class="form-control" placeholder="Enter first name"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="last_name" class="mb-0">Last Name</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="last_name" class="form-control"
                                                                    placeholder="Enter last name" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="job_role" class="mb-0">Job Role</label>
                                                            <div class="input-group mb-2">
                                                                <select name="job_role"
                                                                    class="form-select form-control">
                                                                    <option value="">--Select Role--</option>
                                                                    <option value="Inspector">Inspector</option>
                                                                    <option value="Sub-Inspector">Sub-Inspector</option>
                                                                    <option value="Constable">Constable</option>
                                                                    <option value="Assistant Constable">Assistant
                                                                        Constable
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <label for="email" class="mb-0">Email address</label>
                                                            <div class="input-group mb-2">
                                                                <input type="email" name="email" class="form-control"
                                                                    placeholder="Enter email address" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="user_type" class="mb-0">User Type</label>
                                                            <div class="input-group mb-2">
                                                                <select name="user_type"
                                                                    class="form-select form-control">
                                                                    <option value="">--Select type--</option>
                                                                    @foreach($userTypes as $key=> $userType)
                                                                    <option value="{{$userType->id}}">
                                                                        {{$userType->type}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="gender" class="mb-0">Gender</label>
                                                            <div class="input-group mb-2">
                                                                <select name="gender" class="form-select form-control"
                                                                    required>
                                                                    <option value="">--Select Gender--</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <label for="join_date" class="mb-0">Joining Date</label>
                                                            <div class="input-group mb-2">
                                                                <input type="date" name="join_date" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="photo" class="mb-0">Uplod Image</label>
                                                            <div class="input-group mb-2">
                                                                <input type="file" name="photo" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-header">
                                                    personal details
                                                </div>
                                                <div class="card-body">
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <label for="first_name" class="mb-0">First Name</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="first_name"
                                                                    class="form-control" placeholder="Enter first name"
                                                                    required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="last_name" class="mb-0">Last Name</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="last_name" class="form-control"
                                                                    placeholder="Enter last name" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="job_role" class="mb-0">Job Role</label>
                                                            <div class="input-group mb-2">
                                                                <select name="job_role"
                                                                    class="form-select form-control">
                                                                    <option value="">--Select Role--</option>
                                                                    <option value="Inspector">Inspector</option>
                                                                    <option value="Sub-Inspector">Sub-Inspector</option>
                                                                    <option value="Constable">Constable</option>
                                                                    <option value="Assistant Constable">Assistant
                                                                        Constable
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <label for="email" class="mb-0">Email address</label>
                                                            <div class="input-group mb-2">
                                                                <input type="email" name="email" class="form-control"
                                                                    placeholder="Enter email address" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="user_type" class="mb-0">User Type</label>
                                                            <div class="input-group mb-2">
                                                                <select name="user_type"
                                                                    class="form-select form-control">
                                                                    <option value="">--Select type--</option>
                                                                    @foreach($userTypes as $key=> $userType)
                                                                    <option value="{{$userType->id}}">
                                                                        {{$userType->type}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="gender" class="mb-0">Gender</label>
                                                            <div class="input-group mb-2">
                                                                <select name="gender" class="form-select form-control"
                                                                    required>
                                                                    <option value="">--Select Gender--</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            <label for="join_date" class="mb-0">Joining Date</label>
                                                            <div class="input-group mb-2">
                                                                <input type="date" name="join_date" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="photo" class="mb-0">Uplod Image</label>
                                                            <div class="input-group mb-2">
                                                                <input type="file" name="photo" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="input-group">
                                                <button class="btn btn-primary">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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