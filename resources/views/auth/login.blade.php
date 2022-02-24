<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>SUKABACA | Login</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="left">
            <h1 class="display-3"><b>SUKA BACA</b></h1>
            <p>Perpustakaan Online, yang melakukan pengelolaan peminjaman dan pengembalian buku secara online</p>
        </div>
        <div class="right">

            <form method="POST" action="{{ route('login') }}">
                <p>
                    <i>
                        <b>HALAMAN LOGIN SUKABACA</b>.
                    </i>
                </p>
                @csrf
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror



                <button type="submit" class="loginBtn">
                    {{ __('Login') }}
                </button>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
                @endif
            </form>
            <p>
                Maksimalkan belajar kamu dengan website
                <i>
                    <b>SUKABACA</b>.
                </i>
            </p>

        </div>
    </div>
</body>

</html>