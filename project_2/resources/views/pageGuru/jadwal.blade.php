<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="shortcut icon" href="../img/logo_sketsu.jpeg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="bg-gray-100 min-h-screen flex flex-row-reverse">
    <!-- Sidebar Kekanan -->
    <div class="w-20 bg-blue-900 text-white flex flex-col items-center py-4 space-y-6 shadow-lg">
        <img src="../img/image-removebg-preview.png" alt="Logo" class="w-10 h-10">

        <button class="material-symbols-outlined hover:text-yellow-500" title="Homepage">
            home
        </button>

        <button class="material-symbols-outlined hover:text-yellow-500" title="Jadwal">
            <a href="jadwal_page.html">
                event
            </a>
        </button>

        <button class="material-symbols-outlined hover:text-yellow-500" title="Profile">
            person
        </button>

        <div class="mt-auto">
            <button class="material-symbols-outlined hover:text-blue-600" title="logout">
                <a href="{{route('login')}}">Logout</a>
            </button>
        </div>
    </div>


    <!-- Hero Utama -->
    <div class="flex-1 p-8">
        <!-- Header -->
        <div class="flex flex-items-center gap-4 mb-6">
            <div
                class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
                <img src="../img/avatar.png" alt="Foto Profile" class="">
            </div>
            <h1 class="text-4xl font-bold">Hello! Zaenal Arifin, S.pd</h1>
        </div>
        <!-- Judul -->
        <h2 class="text-xl font-semibold mb-4">JADWAL HARI INI</h2>

        <!-- CARD Jadwal-->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 px-4">
            <!-- Jadwal 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden w-full max-w-xs">
                <div class="bg-blue-900 text-white text-center font-bold py-2">XI RPL 2</div>
                <div class="p-4 text-sm">
                    <p><b>Zaenal Arifin, S.pd</b></p>
                    <p>Ruang : Lab RPL 2</p>
                    <p>Jam Pelajaran : 6-9</p>
                    <p>Mata Pelajaran: Bahasa Indonesian</p>
                </div>
            </div>
            <!-- Jadwal 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden w-full max-w-xs">
                <div class="bg-blue-900 text-white text-center font-bold py-2">XI RPL 1</div>
                <div class="p-4 text-sm">
                    <p><b>Zaenal Arifin, S.pd</b></p>
                    <p>Ruang : Lab RPL 1</p>
                    <p>Jam Pelajaran : 5-6</p>
                    <p>Mata Pelajaran: Bahasa Indonesian</p>
                </div>
            </div>

            <!-- Jadwal 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden w-full max-w-xs">
                <a href="{{route('presensi')}}">
                <div class="bg-[#328E6E] text-white text-center font-bold py-2">XI RPL 3</div>
                <div class="p-4 text-sm">
                    <p><b>Zaenal Arifin, S.pd</b></p>
                    <p>Ruang : Lab RPL 1</p>
                    <p>Jam Pelajaran : 1-4</p>
                    <p>Mata Pelajaran: Bahasa Indonesian</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>