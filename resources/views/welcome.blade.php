{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>socialLinks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                    <div class="title">
                        The Only Link You’ll Ever Need
                    </div>
                    <p class="new-p">Connect audiences to all of your content with just one link</p>
                </div>

                <div id="lol" class="row justify-content-center">
                    {{-- <a class="lol" href="/register"><button class="new-btn mb-3"><strong>GET STARTED FOR FREE</strong></button></a> --}}

                    <a href="/register" class="mb-3 new-btn"><strong>GET STARTED FOR FREE</strong></a>
                </div>
                <p class="new-p">Already on Linktree? <a href="/login">Log in</a></p>

                
                
                {{-- <div class="row justify-content-center">
                    <div class="col-md-4">
                        <video playsinline autoplay muted loop>
                            <source src="https://videos.ctfassets.net/lbsm39fugycf/1i6LctbRMzKsEmWCdbZWe8/3aecc0e1dd43fa2e291e9d6778c822ee/link_to_anywhere.mp4">
                        </video>
                    </div>
                    <div class="col-md-4">
                        <p>
                            Use it anywhere
Take your Linktree wherever your audience is, to help them to discover all your important content.
                        </p>
                    </div>
                </div>
                 --}}
                

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        <div class="row first" style="padding: 64px 0px;">
            <div class="second" style="box-sizing: border-box; margin: 0px auto; width: 100%;
                max-width: calc(1280px);padding: 0px 64px; -webkit-tap-highlight-color: transparent; display: block;">
                <div class="third" style="margin: 0px auto; padding: 4.44444vw 0px; display: flex; flex-direction: column;-webkit-box-align: center;
                    align-items: center; -webkit-tap-highlight-color: transparent;">
                    <div class="fourth" style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: auto;column-gap: 3.33333%; direction: ltr;
                        text-align: left; -webkit-tap-highlight-color: transparent;">
                        <div class="fifth" style="height: 0px; width: 100%; position: relative; overflow: hidden; flex: 1 1 0%; min-height: 552px; display: block; direction: ltr;
                            text-align: left; -webkit-tap-highlight-color: transparent;">
                            <div class="sixth" style="bottom: -2px; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; width: auto; 
                                height: auto; position: absolute !important; display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                            <video class="seventh" style="height: 100%; width: 100%; -webkit-tap-highlight-color: transparent; object-fit: contain; direction: ltr;
                                text-align: left;" playsinline autoplay muted loop>
                                <source style="eight" src="https://videos.ctfassets.net/lbsm39fugycf/1i6LctbRMzKsEmWCdbZWe8/3aecc0e1dd43fa2e291e9d6778c822ee/link_to_anywhere.mp4">
                            </video>
                        </div>
                    </div>
                    <div class="ninth" style="padding-left: 11.1111%; padding-right: 5.55556%; align-self: center;direction: ltr; -webkit-tap-highlight-color: transparent; 
                        display: block; text-align: left;">
                        <span class="tenth" type="heading" style="margin-bottom: 8px; font-size: 3.33333vw;line-height: 1.17; color: rgb(19, 20, 21); letter-spacing: calc(-0.96px);
                            font-weight: normal; display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                            Use it anywhere
                        </span>
                        <span class="eleventh" style="font-size: 1.66667vw; line-height: 1.5; color: rgb(38, 50, 56); letter-spacing: calc(-0.48px); font-weight: normal;
                            display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                            Take your Linktree wherever your audience is, to help them to discover all your important content.
                        </span>
                    </div>
                </div>
                
                <div class="third" style="margin: 0px auto; padding: 4.44444vw 0px; display: flex; flex-direction: column;-webkit-box-align: center;
                    align-items: center; -webkit-tap-highlight-color: transparent;">
                    <div class="fourth" style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: auto;column-gap: 3.33333%; direction: ltr;
                        text-align: left; -webkit-tap-highlight-color: transparent;">
                        <div class="fifth" style="height: 0px; width: 100%; position: relative; overflow: hidden; flex: 1 1 0%; min-height: 552px; display: block; direction: ltr;
                            text-align: left; -webkit-tap-highlight-color: transparent;">
                            <div class="sixth" style="bottom: -2px; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; width: auto; 
                                height: auto; position: absolute !important; display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                                <span class="tenth" type="heading" style="margin-bottom: 8px; font-size: 3.33333vw;line-height: 1.17; color: rgb(19, 20, 21); letter-spacing: calc(-0.96px);
                                    font-weight: normal; display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                                    Link to everywhere
                                </span>
                                <span class="eleventh" style="font-size: 1.66667vw; line-height: 1.5; color: rgb(38, 50, 56); letter-spacing: calc(-0.48px); font-weight: normal;
                                    display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                                    Linktree is the launchpad to your latest video, article, recipe, tour, store, website, social post - everywhere you are online.
                                </span>
                            </div>
                        </div>
                        <div class="ninth" style="padding-left: 11.1111%; padding-right: 5.55556%; align-self: center;direction: ltr; -webkit-tap-highlight-color: transparent; 
                            display: block; text-align: left;">
                            <video class="seventh" style="height: 100%; width: 100%; -webkit-tap-highlight-color: transparent; object-fit: contain; direction: ltr;
                            text-align: left;" playsinline autoplay muted loop>
                                <source style="eight" src="https://videos.ctfassets.net/lbsm39fugycf/7oDgvpqZimd2N3qRJ3FOmx/be9603d765dc8bedd0d57ae02dc50579/linktree-for-tiktok-hero-2.mp4">
                            </video>
                            
                        </div>
                    </div>
                </div>

                <div class="third" style="margin: 0px auto; padding: 4.44444vw 0px; display: flex; flex-direction: column;-webkit-box-align: center;
                    align-items: center; -webkit-tap-highlight-color: transparent;">
                    <div class="fourth" style="display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: auto;column-gap: 3.33333%; direction: ltr;
                        text-align: left; -webkit-tap-highlight-color: transparent;">
                        <div class="fifth" style="height: 0px; width: 100%; position: relative; overflow: hidden; flex: 1 1 0%; min-height: 552px; display: block; direction: ltr;
                            text-align: left; -webkit-tap-highlight-color: transparent;">
                            <div class="sixth" style="bottom: -2px; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 100%; min-height: 100%; width: auto; 
                                height: auto; position: absolute !important; display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                            <video class="seventh" style="height: 100%; width: 100%; -webkit-tap-highlight-color: transparent; object-fit: contain; direction: ltr;
                                text-align: left;" playsinline autoplay muted loop>
                                <source style="eight" src="https://videos.ctfassets.net/lbsm39fugycf/4jcMGgBbI0ZkJxn9Wqy3DK/61f26c5d0e317799c58e48cd484ce1e6/linktree-causes-landing-page-hero-1.mp4">
                            </video>
                        </div>
                    </div>
                    <div class="ninth" style="padding-left: 11.1111%; padding-right: 5.55556%; align-self: center;direction: ltr; -webkit-tap-highlight-color: transparent; 
                        display: block; text-align: left;">
                        <span class="tenth" type="heading" style="margin-bottom: 8px; font-size: 3.33333vw;line-height: 1.17; color: rgb(19, 20, 21); letter-spacing: calc(-0.96px);
                            font-weight: normal; display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                            Easily managed
                        </span>
                        <span class="eleventh" style="font-size: 1.66667vw; line-height: 1.5; color: rgb(38, 50, 56); letter-spacing: calc(-0.48px); font-weight: normal;
                            display: block; -webkit-tap-highlight-color: transparent; direction: ltr; text-align: left;">
                            Creating a Linktree takes seconds. Use our simple drag-and-drop editor to effortlessly manage your content.
                        </span>
                    </div>
                </div>

            </div>    
        </div>
    </div>

@endsection
