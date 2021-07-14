<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        .select-dropdown,
        .select-dropdown * {
            margin: 0;
            padding: 0;
            position: relative;
            box-sizing: border-box;
        }

        .select-dropdown {
            position: relative;
            background-color: #E6E6E6;
            border-radius: 60px;
        }

        .select-dropdown select {
            font-size: 1rem;
            font-weight: normal;
            max-width: 100%;
            padding: 8px 24px 8px 10px;
            border: none;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .select-dropdown select:active, .select-dropdown select:focus {
            outline: none;
            box-shadow: none;
        }

        .select-dropdown:after {
            content: "";
            position: absolute;
            top: 50%;
            right: 8px;
            width: 0;
            height: 0;
            margin-top: -2px;
            border-top: 5px solid #aaa;
            border-right: 5px solid transparent;
            border-left: 5px solid transparent;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/admin/assets-login/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/toastr.min.css')}}">

    <title>Login page</title>
</head>
<body>

<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                {{ csrf_field() }}
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="email" name="email" value="{{ old('email') }}"
                           class="form-control form-control-user {{ $errors->has('email') ? ' is-invalid' : '' }}"/>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password"
                           class="form-control form-control-user {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           placeholder="Password"/>

                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
                <input type="submit" value="Login" class="btn solid"/>

            </form>


            <form method="POST" action="{{ route('regis.store') }}" class="sign-up-form">
                @csrf
                @method('POST')
                {{ csrf_field() }}
                <h2 class="title">Register akun</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="name" name="name"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password"/>
                </div>

                <div class="select-dropdown input">
                    <select name="jenis_kelamin">
                        <option selected>Jenis Kelamin</option>
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                </div>
                <input type="submit" class="btn"/>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Selamat Datang</h3>
                <p>
                    Sistem Pakar Diagnosa Gangguan Kepribadian Narcisstic Personality Disorder
                </p>
                <p>
                    Belum Punya Akun ?
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Register
                </button>
            </div>
            <img src="img/log.svg" class="image" alt=""/>
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Selamat Datang di</h3>
                <p>
                    Halaman Register Sistem Pakar Diagnosa Gangguan Kepribadian Narcisstic Personality Disorder.
                </p>
                <p>
                    Sudah Punya Akun ?
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>
            </div>
            <img src="img/register.svg" class="image" alt=""/>
        </div>
    </div>
</div>
<script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('assets/admin/assets-login/app.js')}}"></script>

<script src="{{asset('assets/admin/js/toastring/toastr.min.js')}}"></script>
{!! Toastr::message() !!}


<script>

   @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error', {
        closeButton: true,
        progressBar: true,
    });
    @endforeach
    @endif
</script>


</body>
</html>
