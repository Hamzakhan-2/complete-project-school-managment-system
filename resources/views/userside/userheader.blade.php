<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('userside_assets/assets/images/favicon.svg') }}" type="image/x-icon" />
    <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('userside_assets/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('userside_assets/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('userside_assets/assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('userside_assets/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('userside_assets/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('userside_assets/assets/css/main.css') }}" />

</head>

<body>

    <!-- ========== header start ========== -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-6">
                    <div class="header-left d-flex align-items-center">
                        {{-- <div class="menu-toggle-btn mr-20">
                    <button
                      id="menu-toggle"
                      class="main-btn primary-btn btn-hover"
                    >
                      <i class="lni lni-chevron-left me-2"></i> Menu
                    </button>
                  </div> --}}
                        {{-- <div class="header-search d-none d-md-flex">
                    <form action="#">
                      <input type="text" placeholder="Search..." />
                      <button><i class="lni lni-search-alt"></i></button>
                    </form>
                  </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-6">
                    <div class="header-right">
                        <!-- notification start -->
                        <div class="notification-box ml-15 d-none d-md-flex">
                            @php
                                $data = App\Models\Complain::all();
                                $count = count($data);
                            @endphp



                            <button class="dropdown-toggle" type="button" id="notification" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="lni lni-alarm"></i>
                                <span>{{ $count }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                            @foreach ($data as $complain)

                                    <li>
                                        {{-- @dd($complain) --}}
                                        {{-- @foreach ($complain as $comp) --}}
                                        <a href="#0">
                                            <div class="image">
                                                <img src="{{ asset('userside_assets/assets/images/lead/lead-6.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="content">
                                                <h6><span class="text-regular"></span>{{ $complain->title }}</h6>
                                                {{ $complain->messagebox }}<p>
                                                </p>
                                                <span>{{ $complain->created_at->diffForHumans() }}</span>
                                            </div>
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>


                        </div>
                        <!-- notification end -->
                        <!-- message start -->
                        <div class="header-message-box ml-15 d-none d-md-flex">
                            <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="lni lni-envelope"></i>
                                <span>3</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                                <li>
                                    <a href="{{route('chatify')}}">
                                        <div class="image">
                                            <img src="{{ asset('userside_assets/assets/images/lead/lead-5.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="content">
                                            <h6>Jacob Jones</h6>
                                            {{-- <p>Hey!I can across your profile and ...</p>
                                            <span>10 mins ago</span> --}}
                                        </div>
                                    </a>
                                </li>
                               
                              
                            </ul>
                        </div>
                        <!-- message end -->

                        <!-- filter start -->
                        <div class="filter-box ml-15 d-none d-md-flex">
                            <button class="#" type="button" id="filter">
                                <i class="lni lni-alarm"></i>
                            </button>
                        </div>
                        <!-- filter end -->


                        <!-- profile start -->
                        <div class="profile-box ml-15">
                            <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="profile-info">
                                    <div class="info">
                                        <h6>John Doe</h6>
                                        <div class="image">
                                            <img src="{{ asset('userside_assets/assets/images/profile/profile-image.png') }}"
                                                alt="" />
                                            <span class="status"></span>
                                        </div>
                                    </div>
                                </div>
                                <i class="lni lni-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                <li>
                                    <a href="#0">
                                        <i class="lni lni-user"></i> View Profile
                                    </a>
                                </li>


                                <li>
                                    <a href="#0">
                                        <i class="lni lni-alarm"></i> Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('chatify')}}"> <i class="lni lni-inbox"></i> Messages </a>
                                </li>
                                <li>
                                    <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit">

                                            <i classs="lni lni-exit"></i> Sign Out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- profile end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== header end ========== -->

    <!-- ========== section start ========== -->
    {{-- cards --}}
    <!-- ========== section end ========== -->
    @yield('header')
</body>

</html>
