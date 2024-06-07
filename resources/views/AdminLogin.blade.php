<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
</head>

<body class="bg-gray-100 font-sans">

    <div class="login-admin">
        <div class="login-admin-inner">
            <form id="loginForm" action="{{route('admin.login')}}" method="POST" class="rectangle-parent">
                @csrf
                {{-- <div class="frame-child"></div> --}}

                <div class="welcomeback-mimin-wrapper">
                    <h1 class="welcomeback-mimin">WelcomeBack Mimin!</h1>
                </div>
                @if (session('success'))
                <span class="py-1 px-2 bg-green-300 rounded-sm">{{ session('success') }}</span>
                @endif
                <div class="id-admin-parent">
                    <b class="id-admin">ID Admin</b>
                    <div class="rectangle-group">
                        <div class="frame-item"></div>
                        <input name="username" id="username" class="masukan-id-admin shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukan ID Admin" type="text">
                    </div>
                </div>
                <div class="password-parent">
                    <b class="password">Password</b>
                    <div class="rectangle-container">
                        <div class="frame-inner"></div>
                        <input name="password" id="password" class="masukan-password shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukan Password" type="password">
                    </div>
                </div>
                <a href="{{ route('auth.forgot-password') }}" class="forgot-password text-black">Lupa Password min??</a>
                <button type="submit" class="group-button">
                    <div class="rectangle-div" id="rectangle"></div>
                    <b class="masuk">Masuk</b>
                </button>
            </form>
        </div>
        <div class="ellipse-parent">
            <div class="ellipse-div"></div>
            <img class="c002-xa75-primary-1-icon" loading="lazy" alt="" src="Media/imageadminlogin.png">
        </div>
    </div>

    <!-- @if ($errors->any())
    <script>
        @foreach($errors->all() as $error)
        alert('{{ $error }}');
        @endforeach
    </script>
    @endif -->



</body>

</html>