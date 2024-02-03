<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
    <meta name="author" content="Bootlab">

    <title>Admin &amp; Dashboard</title>

    <!-- PICK ONE OF THE STYLES BELOW -->
    <!-- <link href="css/modern.css" rel="stylesheet"> -->
    <!-- <link href="css/classic.css" rel="stylesheet"> -->
    <link href="{{ asset('css/dark.css') }}" rel="stylesheet">
    <!-- <link href="css/light.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->
    <style>
        body {
            opacity: 0;
        }
    </style>
    <script src="{{ asset('js/settings.js') }}"></script>
    <!-- END SETTINGS -->
</head>

<body>
    {{-- <div class="splash active">
        <div class="splash-icon"></div>
    </div> --}}


    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <a class="sidebar-brand" href="index.html">
                <svg>
                    <use xlink:href="#ion-ios-pulse-strong"></use>
                </svg>
                Spark
            </a>
            <div class="sidebar-content">
                <div class="sidebar-user">
                    <img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
                    <div class="fw-bold">HAMZA KHAN</div>
                    <small>Front-end Developer</small>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header"></li>
                    {{-- <li class="sidebar-item active"> --}}
                    <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                        <i class="align-middle me-2 fas fa-fw fa-home">
                        </i> <span class="align-middle"Dashboards</span>Dashbord</a>
                    </li>


                    <ul class="sidebar-list">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('parent.create') }}">
                                <i class="align-middle me-2 fas fa-users"></i>
                                <span class="align-middle">Parent Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('student.create') }}">
                                <i class="align-middle me-2 fas fa-graduation-cap"></i>
                                <span class="align-middle">Student Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('teacher.create') }}">
                                <i class="align-middle me-2 fas fa-chalkboard-teacher"></i>
                                <span class="align-middle">Teacher Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('create.request.meeting') }}">
                                <i class="align-middle me-2 fas fa-calendar-alt"></i>
                                <span class="align-middle">Meeting Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('create.attendence') }}">
                                <i class="align-middle me-2 fas fa-check-square"></i>
                                <span class="align-middle">Attendance Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('create.transportation') }}">
                                <i class="align-middle me-2 fas fa-bus"></i>
                                <span class="align-middle">Transportation Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('complain.admin') }}">
                                <i class="align-middle me-2 fas fa-exclamation-triangle"></i>
                                <span class="align-middle">Complain Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('new.user') }}">
                                <i class="align-middle me-2 fas fa-user"></i>
                                <span class="align-middle">Register Users</span>
                            </a>
                        </li>
                    </ul>

        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-theme">
                <a class="sidebar-toggle d-flex me-2">
                    <i class="hamburger align-self-center"></i>
                </a>

                <form class="d-none d-sm-inline-block">
                    <input class="form-control form-control-lite" type="text" placeholder="Search projects...">
                </form>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <i class="align-middle fas fa-envelope-open"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-5.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Michelle Bilodeau</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis
                                                    arcu tortor.</div>
                                                <div class="text-muted small mt-1">5m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Kathie Burton">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Kathie Burton</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Alexander Groves">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Alexander Groves</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Daisy Seger">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Daisy Seger</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <i class="align-middle fas fa-bell"></i>
                                <span class="indicator"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="ms-1 text-danger fas fa-fw fa-bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="ms-1 text-warning fas fa-fw fa-envelope-open"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">6h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="ms-1 text-primary fas fa-fw fa-building"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.1</div>
                                                <div class="text-muted small mt-1">8h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="list-group">

                                    
                                          <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">Notification</div>
                                                <?php
                                                $user = App\Models\User::all();
                                                $notifications = App\Models\Notification::all();
                                               
                                               foreach ($notifications as $notification) {
                                               echo '<td>' . $notification->type . '</td>';
                                               }
                                                   ?>
                                                    <div class="text-muted small mt-1"></div>
                                                    </div>
                                                </div>
                                            </a>

                                    </div>



                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown ms-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown"
                                data-bs-toggle="dropdown">
                                <i class="align-middle fas fa-cog"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#"><i
                                        class="align-middle me-1 fas fa-fw fa-user"></i>
                                    View Profile</a>
                                <a class="dropdown-item" href="#"><i
                                        class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
                                <a class="dropdown-item" href="#"><i
                                        class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
                                <a class="dropdown-item" href="#"><i
                                        class="align-middle me-1 fas fa-fw fa-cogs"></i>
                                    Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('adminlogout') }}"><i
                                        class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown custom-nav-item" data-position="left">
                            <a class="nav-link dropdown-toggle custom-nav-link" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ LaravelLocalization::getCurrentLocaleNative() }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>

            @section('content')
            @stop
