<!DOCTYPE html>
<html>
<head>
    <title>Hemoglobin</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/fontawesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/all.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
</head>
<body>

    <header class="header_area">
        <div class="header_left">
            <img src="{{ asset('admin/images/logo.png') }}" alt="logo image">
        </div>
        <div class="search">
            <form>
                <input type="text" name="search" placeholder="Search Here...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="header_right">

            <div class="profile">
                @if (Route::has('login'))
                     @auth
                        @if( Auth::user()->avatar == NULL)
                        <img src="{{ asset('images/user/avatar.png') }}" alt="admin profile">
                        @else
                        <img src="{{ asset('images/user/'.Auth::user()->avatar) }}" alt="donar profile">
                        @endif
                    @endauth
                @endif
            </div>

            <div class="notification">
                <a href="{{ route('admin.request') }}" title="Blood Request">
                    <i class="fa fa-bell"></i>
                    <span class="count bg-danger">
                        @php
                        $review = App\BloodRequest::where('status', 0)->get();
                        echo $review->count();
                        @endphp
                    </span>
                </a>
            </div>

            <div class="massage">
                <a href="{{ route('admin.review') }}" title="Review">
                    <i class="fa fa-envelope"></i>
                    <span class="count bg-primary">
                        @php
                        $review = App\Review::where('status', 0)->get();
                        echo $review->count();
                        @endphp
                    </span>
                </a>
            </div>
            

        </div> <!-- .header_right end -->
    </header> <!-- .header_area end -->

    <aside class="sidebar_area">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}" class="active"><i class="menu-icon fa fa-laptop"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.donor') }}"><i class="fa fa-bars"></i> Donor</a></li>
            <li><a href="{{ route('admin.request') }}"><i class="fa fa-bell"></i> Request</a></li>
            <li><a href=""><i class="fa fa-puzzle-piece"></i> Noties</a></li>
            <li><a href=""><i class="fa fa-th"></i> Blog</a></li>
            <li><a href="{{ route('admin.stock') }}"><i class="fa fa-fire"></i> Stock</a></li>
            <li><a href="{{ route('admin.review') }}"><i class="fa fa-bars"></i> Review</a></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();""><i class="fa fa-exclamation-triangle"></i> LogOut</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>             
            </li>
        </ul>
    </aside>

    <section class="main_section">


        <!-- this is template mastaring part -->
        @yield('content')



        <footer class="footer_area">
            <div class="row">
                <div class="col-md-6">
                    <center><p>Copyright &copy; hemoglobin all right 2020 </p></center>
                </div>
                <div class="col-md-6">
                    <center><p>Developed By: <a href="">Md. Masud Rana</a> </p></center>
                </div>
            </div>
        </footer>


        
    </section> <!-- .main_section end -->

    <script type="text/javascript" src="{{ asset('admin/js/jQuery-v2.2.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/fontawesome.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $('#MyTable').DataTable();
            $('#MyTable2').DataTable();
        } );
    </script>
</body>
</html>

