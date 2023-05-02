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
                            <div class="row">
                                <div class="col mb-2">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="companyDetailsTab" data-toggle="pill"
                                                href="#companyDetails" role="tab" aria-controls="companyDetails"
                                                aria-selected="true">Company
                                                Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="logoHeaderFooterTab" data-toggle="pill"
                                                href="#logoHeaderFooter" role="tab" aria-controls="logoHeaderFooter"
                                                aria-selected="true">Logo & Header/Footer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="paymentTab" data-toggle="pill" href="#payment"
                                                role="tab" aria-controls="payment" aria-selected="true">Payment &
                                                Account</a>
                                        </li>

                                    </ul>

                                </div>
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="companyDetails" role="tabpanel"
                                        aria-labelledby="companyDetailsTab">
                                        <div class="card">
                                            <form action="">
                                                <div class="card-body">
                                                    <div class="row mb-2">
                                                        <div class="form-group">
                                                            <label for="companyName" class="mb-0">Company Name</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="companyName"
                                                                    class="form-control"
                                                                    placeholder="Enter Company Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="mb-0">Phone Number</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="phone" class="form-control"
                                                                    placeholder="Enter Company Phone" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" class="mb-0">Email Address</label>
                                                            <div class="input-group mb-2">
                                                                <input type="email" name="email" class="form-control"
                                                                    placeholder="Enter Company Email" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="website" class="mb-0">Website</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="website" class="form-control"
                                                                    placeholder="Enter Company Website" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address" class="mb-0">Company Address</label>
                                                            <div class="input-group mb-2">
                                                                <textarea name="address" id="" class="form-control"
                                                                    rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city" class="mb-0">City</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="city" class="form-control"
                                                                    placeholder="Enter Company City" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="state" class="mb-0">State</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="state" class="form-control"
                                                                    placeholder="Enter Company State" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zip" class="mb-0">Zipcode</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="zip" class="form-control"
                                                                    placeholder="Enter Company Zipcode" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="logoHeaderFooter" role="tabpanel"
                                        aria-labelledby="logoHeaderFooterTab">
                                        <div class="card">
                                            <form action="">
                                                <div class="card-body">
                                                    <div class="row mb-2">
                                                        <div class="form-group">
                                                            <label for="logo" class="mb-0">Company Logo</label>
                                                            <div class="input-group mb-2">
                                                                <input type="file" name="logo" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="headerTitle" class="mb-0">Header Title</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="headerTitle"
                                                                    class="form-control"
                                                                    placeholder="Enter Header Title" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="footer" class="mb-0">Footer text</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="footer" class="form-control"
                                                                    placeholder="Enter Footer text" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="payment" role="tabpanel"
                                        aria-labelledby="paymentTab">
                                        <div class="card">
                                            <form action="">
                                                <div class="card-body">
                                                    <div class="row mb-2">

                                                        <div class="form-group">
                                                            <label for="currency" class="mb-0">Currency Type</label>
                                                            <div class="input-group mb-2">
                                                                <select name="currency" class="form-select form-control"
                                                                    required>
                                                                    <option value="">--Select Currency Type--</option>
                                                                    <option value="USD">USD</option>
                                                                    <option value="GBP">GBP</option>
                                                                    <option value="EUR">EUR</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="walletName" class="mb-0">Wallet Name</label>
                                                            <div class="input-group mb-2">
                                                                <select name="walletName" class="form-select form-control"
                                                                    required>
                                                                    <option value="">--Select Wallet Name--</option>
                                                                    <option value="USD">USD</option>
                                                                    <option value="GBP">GBP</option>
                                                                    <option value="EUR">EUR</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="footer" class="mb-0">Footer text</label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="footer" class="form-control"
                                                                    placeholder="Enter Footer text" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
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