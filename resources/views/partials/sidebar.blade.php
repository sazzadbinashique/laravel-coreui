<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset('admin/coreui/assets/brand/coreui.svg#full')}}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset('admin/coreui/assets/brand/coreui.svg#signet')}}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item "><a class="nav-link" href="{{route('dashboard')}}">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('admin/coreui/vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
                </svg>{{__('Dashboard')}} </a>
        </li>
        <li class="nav-title">Components</li>
        <li class="nav-group "><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('admin/coreui/vendors/@coreui/icons/svg/free.svg#cil-language')}}"></use>
                </svg>{{__('Menu Name')}} </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="#">Test One</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Test Two</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Test Three</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Test One</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Test One</a></li>
            </ul>
        </li>



        <li class="nav-item"><a class="nav-link" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('admin/coreui/vendors/@coreui/icons/svg/free.svg#cil-bullhorn')}}"></use>
                </svg>{{__('Notification')}} </a>
        </li>

        {{--<li class="nav-group "><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset('assets/coreui/vendors/@coreui/icons/svg/free.svg#cil-settings')}}"></use>
                </svg>{{__('messages.সেটিংস')}} </a>
            <ul class="nav-group-items">

                <li class="nav-item"><a class="nav-link" href="{{route('admin.users.index')}}">{{__('messages.ইউজার')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.roles.index')}}">{{__('messages.রোল এ্যান্ড পারমিশন')}} </a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.districts.index')}}">{{__('messages.জেলা')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.upazilas.index')}}">{{__('messages.উপজেলা')}}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.unions.index')}}">{{__('messages.ইউনিয়ন')}} </a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('admin.activity.log')}}">{{__('messages.অ্যাক্টিভিটি লগ')}}</a></li>
            </ul>
        </li>--}}
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
