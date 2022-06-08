<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-envelope me-2"></i>Mailer</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset("assets/img/logo.png") }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth()->user()->name }}</h6>
                <span>Online</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-envelope me-2"></i>Compose</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-tasks me-2"></i>Manage</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('category.create') }}" class="dropdown-item">Category</a>
                    <a href="{{ route('email.create') }}" class="dropdown-item">Emails</a>
                </div>
            </div>
            <a href="{{ route('msg.index') }}" class="nav-item nav-link"><i class="fa fa-paper-plane me-2"></i>Sent Msgs</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-star me-2"></i>Starred</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-clock me-2"></i>Snoored</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-file me-2"></i>Drafts</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-trash me-2"></i>Trash</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Schedule</a>

            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>
<!-- Sidebar End -->