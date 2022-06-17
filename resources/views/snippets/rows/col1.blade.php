<div class="col-md-4 grid-margin stretch-card">
    <div class="card card-invoice">
      <div class="card-body">
        <h4 class="card-title pb-3">Sent History</h4>
       
        @foreach ($msgs as $msg)
        <div class="list-card">
          <div class="row align-items-center">
            <div class="col-7 col-sm-8">
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <img src="{{ asset('breeze/assets/images/logo.png') }}" alt="" />
                </div>
                <div class="col-sm-8 pr-0 pl-sm-0">
                  <span>{{ $msg->updated_at->diffForHumans() }}</span>
                  <h6 class="mb-1 mb-sm-0">{{ Str::limit($msg->subject, 12) }}</h6>
                </div>
              </div>
            </div>
            <div class="col-5 col-sm-4">
              <div class="d-flex pt-1 align-items-center">
                <div class="reload-outer bg-info">
                  <i class="mdi mdi-reload"></i>
                </div>
                <div class="dropdown dropleft pl-1 pt-3">
                  <div id="dropdownMenuButton2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <p><i class="mdi mdi-dots-vertical"></i></p>
                  </div>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">Resend</a>
                    <a class="dropdown-item" href="#">Reuse</a>
                    <a class="dropdown-item" href="#">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
  </div>