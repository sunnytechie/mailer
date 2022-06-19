<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="/"><img src="{{ asset('breeze/assets/images/just_for_you-removebg-preview.png') }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="/"><img src="{{ asset('breeze/assets/images/logo.png') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          {{-- <div class="nav-profile-image">
            <img src="{{ asset('breeze/assets/images/logo.png') }}" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div> --}}
          <div class="nav-profile-text d-flex flex-column pr-3">
            <span class="font-weight-medium mb-2">{{ Auth::user()->name }}</span>
            <span class="font-weight-normal">Online</span>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="mdi mdi-view-dashboard menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-selection menu-icon"></i>
          <span class="menu-title">Manage</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#addCategory">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#addUser">Emails</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#sentModal">
          <i class="mdi mdi-share menu-icon"></i>
          <span class="menu-title">Sent Msgs</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#todoModal">
          <i class="mdi mdi-playlist-check menu-icon"></i>
          <span class="menu-title">Todo List</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-star-circle menu-icon"></i>
          <span class="menu-title">Starred</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-file-chart menu-icon"></i>
          <span class="menu-title">Drafts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-delete-sweep menu-icon"></i>
          <span class="menu-title">Trash</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-calendar-clock menu-icon"></i>
          <span class="menu-title">Schedule</span>
        </a>
      </li>
      <li class="nav-item sidebar-actions">
        <div class="nav-link">
          <div class="mt-4">
            <div class="border-none">
              <p class="text-black">Others</p>
            </div>
            <ul class="mt-4 pl-0">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit();">
              <li>
                 Sign Out 
                </li>
              </a>
              </form>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </nav>

  {{-- include modals --}}
  @include('snippets.modals.sent')
  @include('snippets.modals.todo')