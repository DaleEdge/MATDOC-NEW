<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('public/front_css/assets/images/logo.png')}}" alt="NEET PG Counseling Logo"
            class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @if (Route::currentRouteName() == 'home') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="{{ route('course.index') }}" class="nav-link @if (Route::currentRouteName() == 'course.index') active @endif">
                        <i class="fas fa-book nav-icon"></i>
                        <p>Course </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('collage.index') }}" class="nav-link @if (Route::currentRouteName() == 'collage.index') active @endif">
                        <i class="fas fa-building nav-icon"></i>
                        <p>College </p>
                    </a>
                </li>
             
                <li class="nav-item">
                    <a href="{{ route('student.index') }}" class="nav-link @if (Route::currentRouteName() == 'student.index') active @endif">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>Student </p>
                    </a>
                </li>

                <li class="nav-item @if (Route::currentRouteName() == 'all_events' || Route::currentRouteName() == 'upcoming_events.index' || Route::currentRouteName() == 'upcoming_events.create' || Route::currentRouteName() == 'upcoming_events.edit' || Route::currentRouteName() == 'previous_events.index' || Route::currentRouteName() == 'previous_events.create' || Route::currentRouteName() == 'previous_events.edit') menu-is-opening menu-open @endif">
                    <a href="{{ route('all_events') }}"
                        class="nav-link @if (Route::currentRouteName() == 'all_events' || Route::currentRouteName() == 'upcoming_events.index' || Route::currentRouteName() == 'upcoming_events.create' || Route::currentRouteName() == 'upcoming_events.edit' || Route::currentRouteName() == 'previous_events.index' || Route::currentRouteName() == 'previous_events.create' || Route::currentRouteName() == 'previous_events.edit') active @endif">
                        <i class="fa fa-calendar nav-icon"></i>
                        <p> Events </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item pl-2">
                            <a href="{{ route('upcoming_events.index') }}"
                                class="nav-link @if (Route::currentRouteName() == 'upcoming_events.index' || Route::currentRouteName() == 'upcoming_events.create' || Route::currentRouteName() == 'upcoming_events.edit') active @endif">
                                <i class="fa fa-angle-right nav-icon"></i>
                                <p>Upcoming Events</p>
                            </a>
                        </li>
                        <li class="nav-item pl-2">
                            <a href="{{ route('previous_events.index') }}"
                                class="nav-link @if (Route::currentRouteName() == 'previous_events.index' || Route::currentRouteName() == 'previous_events.create' || Route::currentRouteName() == 'previous_events.edit') active @endif">
                                <i class="fa fa-angle-right nav-icon"></i>
                                <p>Previous Events</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('notice.index') }}"
                        class="nav-link @if (Route::currentRouteName() == 'notice.index' || Route::currentRouteName() == 'notice.create' || Route::currentRouteName() == 'notice.edit') active @endif ">
                        <i class="fa fa-bullhorn nav-icon"></i>
                        <p>Notices</p>
                    </a>
                </li>
              
               <li class="nav-item">
                    <a href="{{ route('all_enquiry') }}" class="nav-link @if (Route::currentRouteName() == 'all_enquiry') active @endif">
                        <i class="fas fa-envelope nav-icon"></i>
                        <p>Enquiry </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('all_contact') }}" class="nav-link @if (Route::currentRouteName() == 'all_contact') active @endif">
                        <i class="fas fa-phone nav-icon"></i>
                        <p>Contact Us </p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
