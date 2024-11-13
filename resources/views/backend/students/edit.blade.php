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
                    <h1>Edit</h1>
                    <form action="{{ route('student.update', $student->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="container mt-5">
                            <h2 class="text-center mb-4">Fill in updates</h2>

                            {{-- name field --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" value="{{ $student->name }}"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" id="email" value="{{ $student->email }}"
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="reg_number" class="form-label">Reg_number</label>
                                <input type="text" name="re_number" id="reg_number" value="{{ $student->reg_number }}"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="grade" class="form-label">Grade</label>
                                <input type="text" name="grade" id="grade" value="{{ $student->grade }}"
                                    class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="course_enrolled" class="form-label">Course_enrolled</label>
                                <input type="text" name="course_enrolled" id="course_enrolled"
                                    value="{{ $student->course_enrolled }}" class="form-control" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Edit Student</button>

                            </div>
                        </div>
                    </form>
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
