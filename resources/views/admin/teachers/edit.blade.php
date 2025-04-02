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
    <h2 class="text-center mb-4">Edit Teacher</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $teacher->first_name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $teacher->last_name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $teacher->phone }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">National ID</label>
            <input type="text" name="national_id" class="form-control" value="{{ $teacher->national_id }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">TSC Number</label>
            <input type="text" name="tsc_number" class="form-control" value="{{ $teacher->tsc_number }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="Male" {{ $teacher->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $teacher->gender == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" value="{{ $teacher->date_of_birth }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Qualification</label>
            <input type="text" name="qualification" class="form-control" value="{{ $teacher->qualification }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Subject Specialization</label>
            <input type="text" name="subject_specialization" class="form-control" value="{{ $teacher->subject_specialization }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Employment Type</label>
            <select name="employment_type" class="form-control" required>
                <option value="Permanent" {{ $teacher->employment_type == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                <option value="Contract" {{ $teacher->employment_type == 'Contract' ? 'selected' : '' }}>Contract</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Date of Employment</label>
            <input type="date" name="date_of_employment" class="form-control" value="{{ $teacher->date_of_employment }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $teacher->address }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Teacher</button>
        <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
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