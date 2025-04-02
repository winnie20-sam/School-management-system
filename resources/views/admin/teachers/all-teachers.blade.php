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

            <div class="container mt-5">
                <h2 class="text-center mb-4">All Teachers</h2>
            
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Qualification</th>
                            <th>Subject</th>
                            <th>Employment Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $key => $teacher)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->phone }}</td>
                            <td>{{ $teacher->qualification }}</td>
                            <td>{{ $teacher->subject_specialization }}</td>
                            <td>{{ $teacher->employment_type }}</td>
                            <td>
                                <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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