<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {!! link_to('/', 'Laravel', ['class' => 'navbar-brand']) !!}
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>{!! link_to('/', 'Home') !!}</li>
                <li>{!! link_to_route('articles.index', 'Articles') !!}</li>
                @if(Auth::user())
                <li>{!! link_to_route('my-articles', 'My articles') !!}</li>
                <li>{!! link_to_route('articles.create', 'Add article') !!}</li>
                <li>{!! link_to_route('trash.list', 'Trash') !!}</li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="pull-left "><span class="label label-primary lead">View mode</span></a>
                    @if(session('mode') == "grid")
                    <input type="checkbox" name="my-checkbox" checked class="view-toggle" data-on-text="Gird" data-off-text="List">
                    @else
                    <input type="checkbox" name="my-checkbox" class="view-toggle" data-on-text="Gird" data-off-text="List">
                    @endif
                </li>
                @if (Auth::guest())
                <li>{!! link_to_route('login', 'Login') !!}</li>
                <li>{!! link_to_route('signup', 'Sign up') !!}</li>  
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>{!! link_to('user/' . Auth::user()->id .'/edit', 'Edit profile') !!}</li>
                        <li>{!! link_to('user/change-password', 'Change password') !!}</li>
                        <li>{!! link_to_route('logout', 'Logout') !!}</li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>