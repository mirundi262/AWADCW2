@extends('backend.layouts.main')
@section('content')
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('backend.layouts.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('backend.layouts.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-tittle">Add Student</h4>
                                <p class="card-description">
                                    Add Student
                                </p>
                                <form class="forms-sample" action="{{ route('student.store') }}" method="POST">
                                    @csrf <!-- CSRF token for security -->
                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="text" name="email" id="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputReg_Number">Reg_Number</label>
                                        <input type="text" name="reg_number" id="reg_number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputGrade">Grade</label>
                                        <input type="text" name="grade" id="grade" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Course Enrolled</label>
                                        <input type="text" name="course_enrolled" id="course_enrolled"
                                            placeholder="course" required>

                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button type="button" class="btn btn-light"
                                        onclick="window.location.href='{{ route('student.index') }}'">Cancel</button>

                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    @include('backend.layouts.footer')
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
    @endsection
