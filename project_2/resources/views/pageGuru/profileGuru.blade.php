<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link
      rel="shortcut icon"
      href="../img/logo_sketsu.jpeg"
      type="image/x-icon"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
  </head>
  <body>
    <div class="flex min-h-screen bg-gray-100">
      <aside
        class="w-64 bg-blue-900 text-white p-6 flex flex-col justify-between"
      >
        <div>
          <div class="flex items-center space-x-3 mb-8">
            <img
              src="../img/image-removebg-preview.png"
              alt="logo_sketsu"
              class="w-12 h-12 rounded-full bg-white"
            />
            <div>
              <h1 class="text-xl font-bold leading-tight">SMK NEGERI 1</h1>
              <p class="text-sm">SUKOREJO</p>
            </div>
          </div>

          <nav class="space-y-4">
            <a href="Home_page.html" class="flex items-center space-x-2">
              <span class="material-symbols-outlined hover:text-red-900">
                home
              </span>
              <span class="font-bold">HOME</span>
            </a>

            <a href="jadwal_page.html" class="flex items-center space-x-2">
              <span class="material-symbols-outlined"> event </span>
              <span class="font-bold">MENGAJAR</span>
            </a>

            <a href="profile_user.html" class="flex items-center space-x-2">
              <span class="material-symbols-outlined"> person </span>
              <span class="font-bold">PROFILE</span>
            </a>
          </nav>
        </div>
        <button
          class="bg-white text-blue-900 font-semibold px-4 py-2 rounded hover:bg-gray-200"
        >
          <a href="login_page.html">LOGOUT</a>
        </button>
      </aside>

      <!-- MAIN HERO -->
      <main class="flex-1 p-10">
        <div class="flex flex-col items-center">
          <img
            src="../img/avatar.png"
            alt="Profile"
            class="w-20 h-20 rounded-full border-4 border-blue-300 mb-2"
          />
          <h2 class="text-4xl font-bold mb-8">{{$userguru->name}}</h2>
        </div>

        <!-- FORM -->
        <div
          class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto"
        >
          <div>
            <label class="block font-semibold mb-1">Nama:</label>
            <input
              type="text"
              name="name"
              class="w-full border border-gray-300 rounded p-2"
              value="{{$userguru->name}}"
            />
          </div>

          <div>
            <label class="block font-semibold mb-1">Nomor Telp :</label>
            <input
              type="text"
              name="name"
              class="w-full border border-gray-300 rounded p-2"
              value="+62 123-780-321"
            />
          </div>

          <div>
            <label class="block font-semibold mb-1">Email:</label>
            <input
              type="email"
              name="name"
              class="w-full border border-gray-300 rounded p-2"
              value="{{$userguru->email}}"
            />
          </div>

          <div>
            <label class="block font-semibold mb-1">Nip:</label>
            <input
              type="text"
              name="name"
              class="w-full border border-gray-300 rounded p-2"
              value="{{$userguru->nip}}"
            />
          </div>

          <div>
            <label class="block font-semibold mb-1">Alamat:</label>
            <input
              type="text"
              name="name"
              class="w-full border border-gray-300 rounded p-2"
              value="Jeruk Kuwik, Ngulaan"
            />
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
