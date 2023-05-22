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
                      @if(empty(Auth::user()->contactsList->photo))
                      <span class="photo-edit-btn">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <i class="icon fa-solid fa-camera p-2"></i>
                          </a>
                      </span>
                      @else
                      <a class="image" href="{{route('profile.edit')}}">
                          <img src="{{asset('')}}{{Auth::user()->contactsList->photo}}" alt="User">
                      </a>
                      @endif

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
                      <li><a href="{{route('add.contacts')}}"> <i class="fa-solid fa-plus"></i> Add Contacts</a></li>
                      <li><a href="{{route('contacts.list')}}"> <i class="fa-solid fa-list"></i> Contacts List</a></li>
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

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <form action="{{route('update.contacts.photo')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <input type="hidden" name="contactId" value="{{Auth::user()->contactsList->id}}">
                    <input type="file" name="photo" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>