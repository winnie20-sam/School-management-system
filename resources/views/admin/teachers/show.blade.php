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

<style>
  .container {
    max-width: 700px;
    margin: auto;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 26px;
    font-weight: bold;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.card {
    background: #f9f9f9;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 20px;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 22px;
    font-weight: 600;
    color: #414b9b;
    margin-bottom: 15px;
}

p {
    font-size: 16px;
    color: #444;
    margin-bottom: 10px;
}

p strong {
    color: #333;
    font-weight: 600;
}

.btn {
    display: inline-block;
    padding: 10px 18px;
    font-size: 16px;
    font-weight: 500;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
}

.btn-secondary {
    background: #6c757d;
    color: white;
    border: none;
}

.btn-secondary:hover {
    background: #5a6268;
}

.btn-primary {
    background: #5264AE;
    color: white;
    border: none;
}

.btn-primary:hover {
    background: #414b9b;
}

</style>
<div class="container mt-5">
    <h2 class="text-center mb-4">Teacher Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $teacher->first_name }} {{ $teacher->last_name }}</h5>
            <p><strong>Email:</strong> {{ $teacher->email }}</p>
            <p><strong>Phone:</strong> {{ $teacher->phone }}</p>
            <p><strong>National ID:</strong> {{ $teacher->national_id }}</p>
            <p><strong>TSC Number:</strong> {{ $teacher->tsc_number }}</p>
            <p><strong>Gender:</strong> {{ $teacher->gender }}</p>
            <p><strong>Date of Birth:</strong> {{ $teacher->date_of_birth }}</p>
            <p><strong>Qualification:</strong> {{ $teacher->qualification }}</p>
            <p><strong>Subject Specialization:</strong> {{ $teacher->subject_specialization }}</p>
            <p><strong>Employment Type:</strong> {{ $teacher->employment_type }}</p>
            <p><strong>Date of Employment:</strong> {{ $teacher->date_of_employment }}</p>
            <p><strong>Address:</strong> {{ $teacher->address }}</p>

            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
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