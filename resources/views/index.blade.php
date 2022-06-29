<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>S.F.I Mailer</title>
    <link rel="stylesheet" href="breeze/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="breeze/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="breeze/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="breeze/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="breeze/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="breeze/assets/css/style.css" />
    <link rel="shortcut icon" href="breeze/assets/images/logo.png" />
  </head>
  <body>
    <div class="container-scroller">
      
      @include('snippets.nav')

      <div class="container-fluid page-body-wrapper">

        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>


        @include('snippets.nav2')


        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Hi, welcome back!
              </h3>
              
              @if(Session::has('success'))
                    <span class="alert alert-info m-2">{{ Session::get('success') }}</span>
              @endif
              <div class="d-flex">
                <button type="button" class="btn btn-sm bg-white btn-icon-text border" data-toggle="modal" data-target="#importPeople">
                  <i class="mdi mdi-file-import btn-icon-prepend"></i> Import 
                </button>
                @include('snippets.modals.import.excel')

                <a href="{{ route('export') }}" type="button" class="btn btn-sm bg-white btn-icon-text border">
                    <i class="mdi mdi-file-export btn-icon-prepend"></i> Export 
                </a>

                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3" data-toggle="modal" data-target="#addCategory">
                  <i class="mdi mdi-playlist-plus btn-icon-prepend"></i> Category 
                 </button>
                 @include('snippets.modals.addcategory')


                <button type="button" class="btn btn-sm ml-3 btn-success" data-toggle="modal" data-target="#addUser">
                  <i class="mdi mdi-account-multiple-plus btn-icon-prepend"></i> Add Member 
                  </button>
                {{-- Modals --}}
                @include('snippets.modals.adduser')
              </div>
            </div>

            
            <div class="row">
            
              <div class="col-xl-12 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-7">
                        <h5>Sisters' Fellowship International</h5>
                        <p class="text-muted"> 
                          Bulk Email Sender Application
                        </p>
                      </div>
                      <div class="col-sm-5 text-md-right">
                        <button type="button" class="btn btn-icon-text mb-3 mb-sm-0 btn-inverse-primary font-weight-normal" data-toggle="modal" data-target="#compose">
                          <i class="mdi mdi-message-text-outline btn-icon-prepend"></i>Compose Mail 
                        </button>
                        @include('snippets.modals.compose')

                      </div>
                    </div>

                    <div class="row">
                      @include('snippets.rows.col1')
                      @include('snippets.rows.col2')
                      @include('snippets.rows.col3')               
                    </div>



                    
                  </div>
                </div>
              </div>
            </div>

            

            
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © sfiloveinaction.org 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Visit <a href="https://www.sfiloveinaction.org/" target="_blank">Sisters' Fellowship International</a> Website</span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    {{-- TinyMCE Editor --}}
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
      });
    </script>
    <!-- plugins:js -->
    <script src="breeze/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="breeze/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="breeze/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="breeze/assets/vendors/flot/jquery.flot.js"></script>
    <script src="breeze/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="breeze/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="breeze/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="breeze/assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="breeze/assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="breeze/assets/js/off-canvas.js"></script>
    <script src="breeze/assets/js/hoverable-collapse.js"></script>
    <script src="breeze/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="breeze/assets/js/dashboard.js"></script>
    <!-- CKEDITOR Javascript -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'floatingTextarea');
       // ClassicEditor
       //     .create( document.querySelector( '#articleEditor' ) )
       //     .catch( error => {
       //         console.error( error );
       //     } );
   </script>
    <!-- End custom js for this page -->

    <script>
      setTimeout(function() {
          $('.alert').fadeOut('fast');
      }, 5000);
  </script>
  </body>
</html>