<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title> @yield('title')</title>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href="{{ asset('template/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/assets/fontawesome/css/all.min.css') }}">
    <link href="{{ asset('template/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-dataTable.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/dataTable-bootstrap.min.css') }}">
</head>

<body class="app">
    <div>
        @include('layouts.template.sidebar')
        <div class="page-container">
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="fas fa-bars"></i></a></li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Search...">
                        </li>
                    </ul>
                    <ul class="nav-right">
                            {{-- <li class="notifications dropdown"><span class="counter bgc-red">3</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
                                    <li>
                                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                                    <div class="peer peer-greed"><span><span class="fw-500">John Doe</span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span>
                                                        </span>
                                                        <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                                    <div class="peer peer-greed"><span><span class="fw-500">Moo Doe</span> <span class="c-grey-600">liked your <span class="text-dark">cover image</span></span>
                                                        </span>
                                                        <p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                                    <div class="peer peer-greed"><span><span class="fw-500">Lee Doe</span> <span class="c-grey-600">commented on your <span class="text-dark">video</span></span>
                                                        </span>
                                                        <p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pX-20 pY-15 ta-c bdT"><span><a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                                </ul>
                            </li>
                            <li class="notifications dropdown"><span class="counter bgc-blue">3</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Emails</span></li>
                                    <li>
                                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                                    <div class="peer peer-greed">
                                                        <div>
                                                            <div class="peers jc-sb fxw-nw mB-5">
                                                                <div class="peer">
                                                                    <p class="fw-500 mB-0">John Doe</p>
                                                                </div>
                                                                <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                                            </div><span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                                    <div class="peer peer-greed">
                                                        <div>
                                                            <div class="peers jc-sb fxw-nw mB-5">
                                                                <div class="peer">
                                                                    <p class="fw-500 mB-0">Moo Doe</p>
                                                                </div>
                                                                <div class="peer"><small class="fsz-xs">15 mins ago</small></div>
                                                            </div><span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                                    <div class="peer peer-greed">
                                                        <div>
                                                            <div class="peers jc-sb fxw-nw mB-5">
                                                                <div class="peer">
                                                                    <p class="fw-500 mB-0">Lee Doe</p>
                                                                </div>
                                                                <div class="peer"><small class="fsz-xs">25 mins ago</small></div>
                                                            </div><span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pX-20 pY-15 ta-c bdT"><span><a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
                                </ul>
                            </li> --}}
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                    <div class="peer mR-10"><img class="w-2r bdrs-50p"> <span class="icon-holder"><i class="c-black-500 far fa-user"></i> </span></div>
                                    <div class="peer"><span class="fsz-sm c-grey-900">{{ Auth::user()->name }}</span></div>
                                </a>
                                <ul class="dropdown-menu fsz-sm">
                                    {{--  <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                                    <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                                    <li><a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                                    <li role="separator" class="divider"></li> --}}
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="fas fa-power-off"></i> <span>Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                </div>
            </div>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                        @if (\Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{!! \Session::get('error') !!}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (\Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{!! \Session::get('success') !!}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    @yield('content')
                </div>
            </main>
        
        </div>
    </div>
    
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('template/js/vendor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/js/bundle.min.js') }}"></script>
    <script src="{{ asset('template/js/select2.min.js') }}"></script>
    <script src="{{ asset('template/js/select2.js') }}"></script>
    <script src="{{ asset('template/assets/jqueryui/jquery-ui.js') }}"></script>
    <script src="{{ asset('template/assets/jqueryui/meu-jquery-ui.js') }}"></script>
    <script src="{{ asset('template/js/moment.min.js') }}"></script>
    <script src="{{ asset('template/js/moment.js') }}"></script>
    <script src="{{ asset('template/js/jquery-mask.js') }}"></script>

    <script src="{{ asset('template/js/jquery-dataTables.min.js') }}"></script>
    <script src="{{ asset('template/js/dataTables-bootstrap4.min.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('javascript')

</body>

</html>
