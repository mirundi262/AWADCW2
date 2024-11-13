<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">

                <div class="profile-name">
                    <p class="name">
                        Student Management System
                    </p>

                </div>
            </div>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title">Student</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('student.create') }}"
                            class="btn btn-primary">Add Student</a>

                        {{-- <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html"></a> --}}
                    </li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link" class="nav-link"
                            href="{{ route('student.index') }}" class="btn btn-primary">View Student</a>
                </ul>
            </div>
        </li>
        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                aria-controls="sidebar-layouts">
                <i class="fas fa-columns menu-icon"></i>
                <span class="menu-title">Course</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item"><a class="nav-link" href="{{ route('courses.create') }}">Add Course</a>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('course.index') }}">View course</a>

                    </li>

        </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="far fa-compass menu-icon"></i>
            <span class="menu-title">Payments</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Make payment</a>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">payment status</a>
                </li>

            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
            aria-controls="ui-advanced">
            <i class="fas fa-clipboard-list menu-icon"></i>
            <span class="menu-title">Lecturer</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Add lecturer</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">View Lecturer</a>
                </li>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
            aria-controls="form-elements">
            <i class="fab fa-wpforms menu-icon"></i>
            <span class="menu-title">Enrollment</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Enroll</a></li>
    </li>
    </ul>
    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <i class="fas fa-pen-square menu-icon"></i>
            <span class="menu-title">TimeTable</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="editors">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">View Timetable</a></li>
            </ul>
        </div>
    </li>





    <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2
                </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">
                    Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html">
                    Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">
                    Lockscreen </a></li>
        </ul>
    </div>

    </a>
    <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404
                </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500
                </a></li>
        </ul>
    </div>
    </li>

    </a>
    <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> BlankPage </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a> </li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html">Timeline </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html">Search Results </a>
            </li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html">Portfolio </a></li>
        </ul>
    </div>
    </li>


    <div class="collapse" id="e-commerce">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice
                </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html">
                    Pricing Table </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders
                </a></li>
        </ul>
    </div>
    </li>

    </ul>
</nav>
