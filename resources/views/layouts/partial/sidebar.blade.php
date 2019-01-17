<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="{{url('/admin/dashboard')}}" class="simple-text logo-normal">
            LaraCafe
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{Request::is('admin/dashboard*')? 'active':''}}">
                <a class="nav-link" href="{{url('/admin/dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{Request::is('admin/slider*')? 'active':''}}" >
                <a class="nav-link" href="{{url('/admin/slider')}}">
                    <i class="material-icons">slideshow</i>
                    <p>Slider</p>
                </a>
            </li>
            <li class="{{Request::is('admin/category*')? 'active':''}}">
                <a class="nav-link" href="{{url('/admin/category')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Category</p>
                </a>
            </li>
            <li class="{{Request::is('admin/item*')? 'active':''}}">
                <a class="nav-link" href="{{url('/admin/item')}}">
                    <i class="material-icons">library_books</i>
                    <p>Item</p>
                </a>
            </li>
            <li class="{{Request::is('admin/reservation*')? 'active':''}}">
                <a class="nav-link" href="{{url('/admin/reservation')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Reservation</p>
                </a>
            </li>
            <li class="{{Request::is('admin/confirm_reservation*')? 'active':''}}">
                <a class="nav-link" href="{{url('/admin/confirm_reservation')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Reservation Confirm</p>
                </a>
            </li>
            <li class="{{Request::is('admin/message*')? 'active':''}}">
                <a class="nav-link" href="{{url('/admin/message')}}">
                    <i class="material-icons">notifications</i>
                    <p>Message</p>
                </a>
            </li>
        </ul>
    </div>
</div>
