<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
    <div class="navbar-nav font-weight-bold mx-auto py-0">
        <a href="/" class="nav-item nav-link @yield('main') ">@lang('navbar.home')</a>
        <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
        <a href="/group" class="nav-item nav-link @yield('group') ">@lang('navbar.groups')</a>
        <a href="/team" class="nav-item nav-link @yield('team') ">@lang('navbar.teachers')</a>
        <a href="/achievements" class="nav-item nav-link @yield('achievements') ">@lang('navbar.achievements')</a>
        <a href="/gallery" class="nav-item nav-link @yield('gallery')">@lang('navbar.gallery')</a>
        <a href="/blog" class="nav-item nav-link @yield('blog')">@lang('navbar.articles')</a>
        <a href="/contact" class="nav-item nav-link @yield('contact')">@lang('navbar.contact')</a>
    </div>
</div>
<a class="btn btn-primaryy px-4" href="/lang/uz"><img style="padding: 3px;" src="/assets/img/Uzbekistan-Flag-icon.png"
        width="35" height="35" alt="lorem"></a>
<a class="btn btn-primaryy px-4" href="/lang/ru"><img style="padding: 3px;"
        src="/assets/img/united-states-of-america-flag-png-xl.png" width="35" height="35" alt="lorem"></a>
<a class="btn btn-primaryy px-4" href="/lang/en"><img style="padding: 3px;" src="/assets/img/Russia-flag.png"
        width="35" height="35" alt="lorem"></a>
<!-- <a  href="tel:+998996111300" class="btn btn-primary px-4"><img src="img/missed-call.png" width="35" height="35" alt="lorem">  Qong'iroq qiling</a> -->
</div>
