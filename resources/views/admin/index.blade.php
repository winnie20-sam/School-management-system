<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      

      @include('admin.sidenav')

            <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        @include('admin.topnav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">


            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                          <h4 class="card-title mb-1">Recent Teachers</h4>
                          <p class="text-muted mb-1">Latest updates</p>
                      </div>
                      <div class="row">
                          <div class="col-12">
                              <div class="preview-list">
                              
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          



          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>