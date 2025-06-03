<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jurnal Mengajar</title>
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
          {{-- navbar --}}
          <nav class="space-y-4">
            <a href="{{route('home',['id'=>$user->id])}}" class="flex items-center space-x-2">
              <span class="material-symbols-outlined hover:text-red-900">
                home
              </span>
              <span class="font-bold">HOME</span>
            </a>

            <a href="{{route('profil',['id'=>$user->id])}}" class="flex items-center space-x-2">
              <span class="material-symbols-outlined"> person </span>
              <span class="font-bold">PROFILE</span>
            </a>
          </nav>
        </div>
        <button
          class="bg-white text-blue-900 font-semibold px-4 py-2 rounded hover:bg-gray-200"
        >
          <a href="{{route('login')}}">LOGOUT</a>
        </button>
      </aside>

      <!-- Form -->
      <form action="{{ route('jurnal.store') }}" method="POST">
      @csrf
      {{-- hidden input --}}
      <input type="hidden" name="user_id" value="{{ $user->id }}">
      <input type="hidden" name="mapel_id" value="{{ $mapel->id }}">
      <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
      <input type="hidden" name="tanggal" value="{{ date('Y-m-d') }}">

      <main class="flex-1 justify-center items-start px-4 py-8">
        <div
          class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-4"
        >
          <h2 class="col-span-2 text-2xl font-bold text-center mb-2">
            Jurnal Mengajar
          </h2>

          <div class="col-span-2">
            <p><b>Kelas: {{$jenjang->nama_jenjang}} {{$kelas->nama_kelas}}</b> </p>
            <p><b>Jurusan: {{$jurusan->nama_jurusan}}</b> </p>
            <hr class="my-2 border-gray-300" />
            <p><b>Tanggal :</b> 17-05-2025</p>
          </div>

          <div>
            <label class="block font-semibold mb-1">Jam Pelajaran Ke :</label>
            <input
              type="text"
              name="waktu_mulai"
              value="{{$jadwal->waktu_mulai}}"
              class="w-full border rounded p-2"
            />
          </div>

          <div>
            <label class="block font-semibold mb-1">Sampai Jam ke :</label>
            <input
              type="text"
              name="waktu_selesai"
              value="{{$jadwal->waktu_selesai}}"
              class="w-full border rounded p-2"
            />
          </div>

          <div>
            <label class="block font-semibold mb-1">Mata Pelajaran :</label>
            <input
              type="text"
              name="mapel"
              value="{{$mapel->nama_mapel}}"
              class="w-full border rounded p-2"
            />
          </div>

          <!-- DIbentuk agar inline -->
          <div class="flex gap-2">
            <div class="w-1/3">
              <label class="block font-semibold mb-1">Kode Guru :</label>
              <input
                type="text"
                placeholder="JD"
                class="w-full border rounded p-2"
              />
            </div>
            <div class="w-2/3">
              <label class="block font-semibold mb-1">Nama Guru :</label>
              <input
                type="text"
                value="{{$jadwal->user->name}}"
                class="w-full border rounded p-2"
              />
            </div>
          </div>
          <div class="col-span-2">
            <label class="block font-semibold mb-1">Kegiatan :</label>
            <textarea
              name="kegiatan"
              placeholder="Kegiatan"
              class="w-full border rounded p-2 h-24"
            ></textarea>
          </div>

          <div class="col-span-2">
            <label class="block font-semibold mb-1">Catatan:</label>
            <textarea
              name="catatan"
              placeholder="Catatan"
              class="w-full border rounded p-2 h-24"
            ></textarea>
          </div>

          <div class="col-span-1 md:col-span-2 text-center">
            <button
              class="bg-blue-900 text-white px-6 py-2 rounded shadow hover:bg-blue-700"
              type="submit"
            >
              Submit
            </button>
          </div>
        </div>
      </main>
      </form>
      <!-- END Form -->
    </div>
  </body>
</html>