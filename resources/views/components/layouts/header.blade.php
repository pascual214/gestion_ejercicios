<div class="navbar bg-blue-100 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
            </div>
            <ul
                tabindex="-1"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a href='login'>{{__("Iniciar Sesión")}}</a></li>
                <li><a href="register">{{__("Registrarse")}}</a></li>
            </ul>
        </div>
        <img src="{{asset("images/HoopLab_recortada.png")}}" alt="imagen" class="h-16 ml-1">
    </div>
    @guest
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1 gap-1">
                <li><a href='login' class="btn btn-soft btn-primary">{{__("Iniciar Sesión")}}</a></li>
                <li><a href="register" class="btn btn-primary">{{__("Registrarse")}}</a></li>
            </ul>
        </div>
    @endguest
    @auth
        <div class="navbar-end hidden lg:flex">
            <div class="flex items-center gap-3">
                <span class="font-semibold text-sm">
                    {{ auth()->user()->name }}
                </span>
                <form action="logout" method="POST">
                    @csrf
                    <button class="btn btn-soft btn-primary">
                        {{ __("Logout") }}
                    </button>
                </form>
            </div>
        </div>
    @endauth
    <x-language-switcher />
</div>
