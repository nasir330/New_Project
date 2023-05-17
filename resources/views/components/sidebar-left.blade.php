  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
      <div class="navbar-brand">
          <button class="btn-menu ls-toggle-btn" type="button"><i class="fa-solid fa-bars"></i></button>
          <a href="{{route('dashboard')}}">
              <img src="{{asset('Assets/img/logo.svg')}}" width="25" alt="Aero">
              <span class="m-l-10">Aero</span>
          </a>
      </div>
      <div class="menu">
          <ul class="list">
              <li>
                  <div class="user-info">
                      <a class="image" href="profile.html"><img src="{{asset('Assets/img/profile_av.jpg')}}"
                              alt="User"></a>
                      <div class="detail">
                          <h4>Michael</h4>
                          <small>Super Admin</small>
                      </div>
                  </div>
              </li>
              <li class="active open">
                  <a href="{{route('dashboard')}}">
                      <i class="fa-solid fa-house"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li>
                  <a href="javascript:void(0);" class="menu-toggle">
                      <i class="fa-solid fa-address-book"></i>
                      <span>Contacts</span></a>
                  <ul class="ml-menu">
                      <li><a href="#"> <i class="fa-solid fa-plus"></i> Add Contacts</a></li>
                      <li><a href="#"> <i class="fa-solid fa-list"></i> Contacts List</a></li>
                  </ul>
              </li>
              <li>
                  <a href="javascript:void(0);" class="menu-toggle">
                      <i class="fa-solid fa-cart-shopping"></i>
                      <span>Purchase</span></a>
                  <ul class="ml-menu">
                      <li><a href="#"> <i class="fa-solid fa-plus"></i> Add Purchase</a></li>
                      <li><a href="#"> <i class="fa-solid fa-list"></i> Purchase List</a></li>
                  </ul>
              </li>
              <li>
                  <a href="javascript:void(0);" class="menu-toggle">
                      <i class="fa-solid fa-sack-dollar"></i>
                      <span>Payments</span></a>
                  <ul class="ml-menu">
                      <li><a href="#"> <i class="fa-solid fa-plus"></i> Add Payment</a></li>
                      <li><a href="#"> <i class="fa-solid fa-list"></i> Payment List</a></li>
                  </ul>
              </li>
              <li class="">
                  <a href="{{route('dashboard')}}">
                      <i class="fa-solid fa-file-pdf"></i>
                      <span>Repoprts</span>
                  </a>
              </li>
              <li class="">
                  <a href="{{route('dashboard')}}">
                      <i class="fa-solid fa-gears"></i>
                      <span>Settings</span>
                  </a>
              </li>
          </ul>
      </div>
  </aside>