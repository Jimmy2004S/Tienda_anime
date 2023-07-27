@yield('style-header')
<header class="header">
    <nav class="navegacion">
        <div class="subp">
            <a href=" {{ route('home') }}">Home</a>
            <a href=" {{ route('item.index') }}">Items</a>
        </div>
        <div class="user">
            <a href="">User</a>
        </div>
    </nav>
    @yield('titulo-header')
</header>
