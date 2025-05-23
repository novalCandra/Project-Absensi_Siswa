
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SMKN 1 SUKOREJO</title>
    <link rel="shortcut icon" href="../img/logo_sketsu.jpeg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-l-lg shadow-xl flex w-full max-w-4xl overflow-hidden">

        <!-- Form Bagian KIri -->
        <div class="w-1/2 p-8">
            <div class="flex items-center gap-2 mb-6">
                <img src="{{ asset('img/image-removebg-preview.png')}}" alt="Logo SMKN 1 SUKOREJO" class="w-20 h-20">
                <h1 class="text-xl font-bold">SMK NEGERI 1 <br>
                    <span class="text-gray-900">
                        SUKOREJO
                    </span>
                </h1>
            </div>

            @if (session('status'))
                <div style="color: green;"> {{ route('status')}}</div>
            @endif

            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="space-y-4" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label class="block text-gray-700 mb-1">email</label>
                    <div class="flex items-center bg-gray-100 rounded px-3">
                        <span class="material-symbols-outlined text-gray-500 mr-2">
                            mail
                        </span>
                        <input name="email" type="text" placeholder="Email" class="bg-transparent w-full py-2 outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 mb-1">Passwords</label>
                    <div class="flex items-center bg-gray-100 rounded px-3">
                        <span class="material-symbols-outlined text-gray-500 mr-2">
                            lock
                        </span>
                        <input name="password" type="password" placeholder="password" class="bg-transparent w-full py-2 outline-none">
                    </div>
                </div>
                
                <div class="flex justify-between text-sm mt-2">
                    <a href="#" class="text-gray-600 font-medium hover:text-blue-600">Sign Up Akun</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600">Lupa Passwords</a>
                </div>

                <button class="w-full mt-4 bg-blue-900 text-white py-2 rounded-full hover:bg-blue-800" type="submit">
                    Login
                </button>
            </form>

        </div>

        <!-- Bagian From Kanan -->
        <div class="w-1/2 bg-blue-800 flex items-center justify-center p-4">
            <img src="{{ asset('img/17852116_5930261.jpg') }}" alt="Foto Teacher">
        </div>
    </div>
</body>

</html>