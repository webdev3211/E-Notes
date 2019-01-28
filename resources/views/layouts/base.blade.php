<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ENotes</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/default.min.css">
  <link rel="icon" type="image/x-icon" href="https://image.freepik.com/free-vector/notebook-pages_23-2147490500.jpg">
    
  <style>
            
        ul{
            list-style-type:none;
        }

        #mybtn{
            background:tomato;border:2px solid tomato;
        }

        body{
            background-image: url('https://thumbs.dreamstime.com/z/empty-open-notebook-white-wood-table-top-view-flat-lay-photo-empty-open-notebook-white-wood-table-top-view-flat-lay-photo-117802594.jpg');
            background-position: fixed;
             
        }

    </style>

</head>

<body>
    <div class="container-fluid" style="margin:0px; padding:0px; margin-top: -10px;">
    <nav class="navbar  navbar-dark" style="background:tomato;">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs pull-xs-left" id="navbar-header">
                <a style="font-family:Satisfy;font-size: 2.0em; font-weight:bold;" class="navbar-brand" href="/">
                    <span>
                        <img src="https://image.freepik.com/free-vector/notebook-pages_23-2147490500.jpg" height="35px" width="25px" alt=""> 
                    </span>
                    ENotes
                </a>
            </div>

    
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto pull-xs-right">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </nav>
    <!-- /navbar -->
        <!-- Main component for call to action -->
        @yield('content')
    </div>
    <!-- /container -->

  {{-- <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
  <script src="{{ asset('dist/js/jquery3.min.js') }}"></script>
   --}}

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
             $('pre cc').each(function(i, block) {
                 hljs.highlightBlock(block);
             });
         });
        
        
        </script>

</body>

</html>
