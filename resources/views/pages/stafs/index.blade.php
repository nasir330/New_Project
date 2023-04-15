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
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key=> $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
<a href="{{route('exportUser')}}">Export</a>
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