<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
                <a class="desktop-logo logo-light active" style="font-size: large" href="{{ url('/index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="desktop-logo logo-dark active" style="font-size: large" href="{{ url('/index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="logo-icon mobile-logo icon-light active" style="font-size: large" href="{{ url('/index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="logo-icon mobile-logo icon-dark active" style="font-size: large" href="{{ url('/index') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
{{--				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>--}}
{{--				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>--}}
{{--				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>--}}
{{--				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>--}}
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">

						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
							<span class="mb-0 text-muted">{{Auth::user()->email}}</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category">Main</li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/index' ) }}"><span class="side-menu__label">Home</span></a>
					</li>
					<li class="side-item side-item-category">General</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' ) }}"><span class="side-menu__label">Users</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/user' . $page='') }}">All Users</a></li>
							<li><a class="slide-item" href="{{ url('/user/create' . $page='') }}">Create user</a></li>

						</ul>
					</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' ) }}"><span class="side-menu__label">Departments</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/department') }}">All department</a></li>
							<li><a class="slide-item" href="{{ url('/department/create' ) }}">Create department</a></li>
						</ul>
					</li>


					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><span class="side-menu__label">Roles</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/role' ) }}">All roles</a></li>
							<li><a class="slide-item" href="{{ url('/role/create' ) }}">Create role</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' ) }}"><span class="side-menu__label">Form Types</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/form-type' ) }}">All form types</a></li>
							<li><a class="slide-item" href="{{ url('/form-type/create' ) }}">Create form type</a></li>

						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' ) }}"><span class="side-menu__label">Advanced</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/advanced' ) }}">All Advanced</a></li>
                            <li><a class="slide-item" href="{{ url('/advanced/create')  }}">Create Advanced</a></li>

                            <li><a class="slide-item" href="{{ url('/advanced/createEmployment')  }}">طلب توظيف</a></li>
                            <li><a class="slide-item" href="{{ url('/advanced/createSeasonalTraining')  }}">طلب تدريب موسمي</a></li>
                            <li><a class="slide-item" href="{{ url('/advanced/createExtra')  }}">طلب اكسترا</a></li>
                            <li><a class="slide-item" href="{{ url('/advanced/directingWork')  }}">مباشرة موظف</a></li>

						</ul>
					</li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="{{ url('/' ) }}"><span class="side-menu__label">Basic</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{ url('/basic' ) }}">All Basic</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/create')  }}">Create Basic</a></li>

                            <li><a class="slide-item" href="{{ url('/basic/create-administrative-leave')  }}">اجازة ادارية</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/create-hourly-leave')  }}">اجازة ساعية</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/permission-change')  }}">اذن تبديل</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/notice-dismissal')  }}">انذار فصل</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/additional-assignment')  }}">تكليف اضافي</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/work-without-fingerprint')  }}">دوام دون بصمة</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/overtime-hours')  }}">ساعات العمل الاضافي</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/request-financial-advance')  }}">طلب سلفة - قسم</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/transfer-request')  }}">طلب نقل</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/financial-punishment')  }}">عقوبة</a></li>
                            <li><a class="slide-item" href="{{ url('/basic/external-task')  }}">مهمة خارجية</a></li>


                        </ul>
                    </li>

				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
