<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
            <meta charset="utf-8" />
        <title>
             @section('title')
                My Blog
             @stop
        </title>
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <div id="wrap">
                <div class="navbar navbar-default navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
                            </ul>

                            <ul class="nav navbar-nav pull-right">
                                @if (Auth::check())
                                @if (Auth::user()->hasRole('admin'))
                                <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                                @endif
                                <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                                <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                                @else
                                <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                                <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
                                @endif
                            </ul>
                            <!-- ./ nav-collapse -->
                        </div>
                    </div>
                </div>
            <div class="container">
               @yield('content')
            </div>

        </div>
    </body>
</html>