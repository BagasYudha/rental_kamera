<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adminlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
</head>

<body class="bg-gray-100 font-sans">

    <div class="login-admin">
        <div class="login-admin-inner">
            <form id="loginForm" action="{{ route('auth.reset-password.send') }}" method="POST"
                class="rectangle-parent">
                @csrf
                {{-- <div class="frame-child"></div> --}}
                <div class="welcomeback-mimin-wrapper">
                    <h1 class="welcomeback-mimin">Lupa Password</h1>
                </div>
                @if (session('message'))
                    <span class="py-1 px-2 bg-blue-300 rounded-sm">{{ session('message') }}</span>
                @endif
                <input type="hidden" name="admin-token" value="{{ $admin->token }}">
                <div class="id-admin-parent">
                    <b class="id-admin">Password Baru</b>
                    <div class="rectangle-group">
                        <div class="frame-item"></div>
                        <input name="new-password" id="username"
                            class="masukan-id-admin shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Masukan Password Baru" type="password" required>
                    </div>
                </div>
                <div class="id-admin-parent">
                    <b class="id-admin">Konfirmasi Password</b>
                    <div class="rectangle-group">
                        <div class="frame-item"></div>
                        <input name="new-password-confirm" id="new-password-confirm"
                            class="masukan-id-admin shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="Konfirmasi Password Baru" type="password" required>
                    </div>
                </div>
                <button type="submit" class="group-button">
                    <div class="rectangle-div" id="rectangle"></div>
                    <b class="masuk">Kirim</b>
                </button>
            </form>
        </div>
        <div class="ellipse-parent">
            <div class="ellipse-div"></div>
            <img class="c002-xa75-primary-1-icon" loading="lazy" alt="" src="media/imageadminlogin.png">
        </div>
    </div>

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                alert('{{ $error }}');
            @endforeach
        </script>
    @endif

    @if (session('error'))
        <script>
            alert('{{ session('error') }}');
        </script>
    @endif

</body>

</html>
