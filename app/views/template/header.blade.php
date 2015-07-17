<header>
    <div class="container">
        <nav class="navbar" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url("")}}"><img src="{{asset('app/images/logo.png')}}" alt=""></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-main">
                    @foreach($categories as $item)
                        <li><a href="{{url('categories/'.$item->id)}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="with_btn">
                        @if(!Auth::check())
                            <button class="btn btn-signIn" rel="popover" data-popover-content="#loginForm">Sign In
                            </button>
                        @else
                            <a href="{{url('user/logout')}}" class="btn btn-signIn">Logout</a>
                        @endif
                    </li>
                    <li><a href=""><img src="{{asset('app/images/Search_icon.png')}}" alt=""></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</header>