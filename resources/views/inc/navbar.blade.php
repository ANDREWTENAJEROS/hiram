
<div >
		<!-- Header desktop -->
		<div>

			<div class="wrap_header" style=" position: fixed !important; ">
				<!-- Logo -->
				<a href="/posts" class="logo">
                <img src="../../images/icons/logo.png" alt="H I R A M">
				</a>
                @guest
				<!-- Menu -->
                    <div class="wrap_emenu">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="/posts">Home</a>
                                    
                                </li>

                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('register') }}">Signup</a>
                                </li>

                                <li>
                                    <a href="/about">About</a>
                                </li>

                            </ul>
                        </nav>
                    </div>

				<!-- Header Icon -->
				<div class="header-icons">
                    <a href="{{ route('login') }}" class="header-wrapicon1 dis-block">
                        Guest
                        <img src="../../images/icons/icon-header-01.png" style="    padding-left: 10px;" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					
				</div>
			</div>
        </div>
        
        @else
            <div class="wrap_menu" style=" position: fixed;">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="/posts">Home</a>
                        </li>
                        @if(!Auth::user()->email == "admin@admin.com")
                        <li>
                        <a href="/posts/create">Upload</a>
                        </li>
                        @endif
                        <li>
                            <a href="/dashboard">My Account</a>
                        </li>
                        <li>
                        @if(Auth::user()->email == "admin@admin.com")
                <a href="/admin" class="header-wrapicon1 dis-block">
                Admin Dashboard
                    </a>
                    @endif
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-icons">
                
            @if(Auth::user()->email == "admin@admin.com")
                <a href="/admin" class="header-wrapicon1 dis-block">
                    {{(Auth::user()->name)}}
                    <img src="../../images/icons/icon-header-01.png" style="margin-left:10px" class="header-icon1" alt="Dashboard">
                </a>
            @else
                <a href="/dashboard" class="header-wrapicon1 dis-block">
                    {{(Auth::user()->name)}}
                    <img src="../../images/icons/icon-header-01.png" style="margin-left:10px" class="header-icon1" alt="Dashboard">
                </a>
            @endif

                <span class="linedivide1"></span>
                <a href="{{ route('logout') }}" class="header-wrapicon1 dis-block">
                        <img src="../../images/icons/icon-logout.png" href="{{ route('logout') }}" class="header-icon1" alt="Logout"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                    <span class="linedivide1"></span>
                    </div>
                    @endguest
</div>



