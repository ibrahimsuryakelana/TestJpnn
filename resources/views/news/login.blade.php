<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JPNN.com Recruitment</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        nav>.nav.nav-tabs{border:none;color:#fff;background:#272e38;border-radius:0}nav>div a.nav-item.nav-link{border:none;padding:18px 25px;color:#fff;background:#272e38;border-radius:0}.tab-content{background:#fdfdfd;line-height:25px;border:1px solid #ddd;border-top:5px solid #0f0a5e;border-bottom:5px solid #0f0a5e;padding:30px 25px}nav>div a.nav-item.nav-link:hover,nav>div a.nav-item.nav-link:focus,nav>div a.nav-item.nav-link.active{border:none;background:#0f0a5e;color:#fff;border-radius:0;transition:background 0.20s linear}.logo{padding:2em 0;text-align:center}.text-center{text-align:center}
    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="logo">
                <img src="https://www.jpnn.com/assets/img/logojpnncom.png" alt="JPNN.com" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link" href="/news">Latest News</a>
                    <a class="nav-item nav-link" href="/news/register">Registers</a>
                    <a class="nav-item nav-link" href="/news/listuser">List User</a>
                    <a class="nav-item nav-link" href="/news/login">Login</a>

                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-news" role="tabpanel" aria-labelledby="nav-news-tab">
                    {{-- <table>     
                        {{dd($res)}} 
                        
                        @for ($i = 0; $i < count($r); $i++)
                            <tr>
                                <td>{{$r[$i]['thumbnail']}}</td>
                            </tr>
                            <tr>
                                <td>{{$r[$i]['title']}}</td>
                            </tr>
                            <tr>
                                <td>{{$r[$i]['teaser']}}</td>
                            </tr>
                            <tr>
                                <td>-----</td>
                            </tr>
                        @endfor
                        </tr>
                    </table> --}}
                </div>
                <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                </div>
                <div class="tab-pane fade" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">
                    <ul class="list-unstyled">
                        <li class="media">
                            <img src="https://demo.joomlashine.com/joomla-templates/jsn_metro/free/images/content/content-html/demo-image1.jpg&w=128&h=128&zc=1&q=80" class="mr-3" alt="title">
                            <div class="media-body">
                                    <h5 class="mt-0 mb-1"><a href="javascript:;" data-toggle="modal" data-target="#profile">Nama 1</a></h5>
                                <p>Alamat 1, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                <a href="#" class="btn btn-secondary">Following</a>
                            </div>
                        </li>
                        <li class="media my-4">
                            <img src="https://demo.joomlashine.com/joomla-templates/jsn_metro/free/images/content/content-html/demo-image1.jpg&w=128&h=128&zc=1&q=80" class="mr-3" alt="title">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="javascript:;" data-toggle="modal" data-target="#profile">Nama 2</a></h5>
                                <p>Alamat 2, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                <a href="#" class="btn btn-secondary">Following</a>
                            </div>
                        </li>
                        <li class="media">
                            <img src="https://demo.joomlashine.com/joomla-templates/jsn_metro/free/images/content/content-html/demo-image1.jpg&w=128&h=128&zc=1&q=80" class="mr-3" alt="title">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1"><a href="javascript:;" data-toggle="modal" data-target="#profile">Nama 3</a></h5>
                                <p>Alamat 3, sCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                <a href="#" class="btn btn-primary">Follow</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                    <div class="row">
                        <div class="col-sm-6 ofwwwet-3">
                            <p class="text-center">
                                <!-- comment belum login -->
                                Anda belum login, cek user anda.
                            </p>
                            <p class="text-center">
                                <!-- comment sudah login -->
                                Anda sudah login sebagai xxx. <br/> <a href="#">Logout</a>
                            </p>
                            <form class="form-signin text-center">
                                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="profile" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="media">
                    <img src="https://demo.joomlashine.com/joomla-templates/jsn_metro/free/images/content/content-html/demo-image1.jpg&w=128&h=128&zc=1&q=80" class="mr-3" alt="title">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1"><a href="javascript:;" data-toggle="modal" data-target="#profile">Nama 3</a></h5>
                        <p>Alamat 3, sCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.ssssssssssssssss</p>
                    </div>
                </div>
                <div class="media">
                    Maaf anda tidak punya akses, harap follow terlebih dahulu
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>