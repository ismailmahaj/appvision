    <nav class="navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">NEW ACCOUNT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
            @guest
                <li class="active">
                <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                <a href="{{ route('register') }}">Register</a>
                </li>
                @else
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
                  
            @endguest
            
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
        <br>
    
        <div class="jumbotron" style="background-color:white;">
         @if(session('success'))
             <div class="container">
                 <div class="alert alert-success">
            {{
                session('success')
            }}
                </div>
             </div>
        @endif
            @if(session('error'))
             <div class="container">
                 <div class="alert alert-danger">
            {{
                session('error')
            }}
                </div>
             </div>
        @endif
                   @yield('content')
        </div>

