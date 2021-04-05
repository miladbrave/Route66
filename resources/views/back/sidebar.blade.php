<section class="hidden-bar sidebar-wrapper">
    <div class="dashboard-inner">
        <div class="cross-icon"><span class="pe-7s-close-circle"></span></div>
        <div class="sidebar-header">
            <div class="user-pic">
                <img class="img-responsive img-rounded" src="/back/images/resource/user.jpg" alt="User picture">
            </div>
            <div class="user-info">
		          	<span class="user-name mt-3 text-danger">
		            	{{auth()->user()->name}}
		          	</span>
            </div>
        </div>
        <div class="sidebar-search">
            <form method="post" action="{{route('prosearch')}}">
                @csrf
                <div class="form-group">
                    <input type="search" name="search" placeholder="جستجو">
                    <button type="submit"><span class="icon la la-search"></span></button>
                </div>
            </form>
        </div>
        <!-- sidebar-search  -->
        <ul class="navigation">
            <li class="active"><a href="{{route('dashboard')}}"><i class="la la-dashboard"></i> داشبورد </a></li>
            <li><a href="{{route('admin.index')}}"><i class="la la-user"></i>ادمین </a></li>
            <li><a href="{{route('slider.index')}}"><i class="la la-sliders"></i>اسلایدر </a></li>
            <li><a href="{{route('home.index')}}"><i class="la la-home"></i>املاک </a></li>
            <li><a href="{{route('car.index')}}"><i class="la la-car"></i>خودرو ها</a></li>
            <li><a href="{{route('properties.index')}}"><i class="la la-anchor"></i>ویژگی ها</a></li>
            <li><a href="{{route('brand.index')}}"><i class="la la-signal"></i>برند ها</a></li>
            <li><a href="{{route('consult.index')}}"><i class="la la-user"></i>مشاورین</a></li>
            <li><a href="{{route('blog.index')}}"><i class="la la-pencil"></i>مقاله ها</a></li>
            <li><a href="{{route('message.index')}}"><i class="la la-envelope"></i> پیام ها </a></li>
            <li><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="la la-sign-out"></i>خروج</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</section>
