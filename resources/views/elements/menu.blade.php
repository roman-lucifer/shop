{{--@php(dd($menuItems))--}}

<nav class="navbar fixed-top navbar-expand-lg navbar-dark stylish-color scrolling-navbar  bg-transparent">
    <div class="container">
        <a href="/" class="navbar-brand cyan-text font-weight-bold">Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @foreach($menuItems as $menuItem)
                    @if(@array_key_exists('sub', $menuItem))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">
                                {{$menuItem['name']}}
                            </a>
                            <ul class="dropdown-menu shadow">
                                @foreach($menuItem['sub'] as $subMenuItem)
                                    <li class="dropdown-item">
                                        <a href="{{$subMenuItem['link']}}" class="nav-link black-text">
                                            {{$subMenuItem['name']}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="nav-item {{ \Illuminate\Support\Facades\Request::is($menuItem['link']) ? "active" : '' }}">
                            <a class="nav-link" href="{{$menuItem['link']}}">
                                {{$menuItem['name']}}
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-envelope"></i><span
                                class="badge badge-primary ml-1">7</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-shopping-basket"></i><span
                                class="badge badge-primary ml-1">92</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-user-alt"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
