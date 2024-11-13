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
                    <table>
                        <thead>
                            <tr>
                                {{-- <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Actions</th> --}}
                            </tr>
                        </thead>
                    </table>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->reg_number }}</td>
                                <td>{{ $student->grade }}</td>
                                <td>{{ $student->course_enrolled }}</td>
                                <td>
                                    <a href="{{ route('student.edit', $student->id) }}">Edit</a>
                                    <form action="{{ route('student.destroy', $student->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
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
