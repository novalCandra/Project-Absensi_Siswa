<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>presentasi siswa</title>
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
          type="submit"
        >
          <a href="{{route('login')}}"> LOGOUT </a>
        </button>
      </aside>
      <!-- Main Content -->
      <div class="flex-1 p-6">
        <!-- Header -->
        <div class="bg-blue-900 text-white rounded-lg p-6 mb-6">
          <h2 class="text-4xl font-bold text-center">Presensi Siswa</h2>
          <div class="mt-2">
            <p class="font-semibold text-4xl">XI RPL 3</p>
            <p class="font-semibold text-4xl">Zaenal Arifin, S Pd.</p>
            <p class="text-right">Jam Pelajaran : 6-9</p>
            <p class="text-right">Mata Pelajaran : Produktif</p>
            <p class="text-right">Guru Pengajar : Zaenal Arifin</p>
          </div>
        </div>

        <!-- Table Presensi -->
        <div class="overflow-x-auto bg-white shadow rounded-lg">
          <table class="min-w-full text-sm text-left">
            <!-- Header  -->
            <thead class="bg-gray-100">
              <tr>
                <th class="px-4 py-2 border text-center">No.</th>
                <th class="px-4 py-2 border text-center">Nama</th>
                <th class="px-4 py-2 border text-center">NISN</th>
                <th class="px-4 py-2 border text-center">Status Kehadiran</th>
              </tr>
            </thead>

            <!-- Isi Table pertama -->
            <tbody>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border text-center">1.</td>
                <td class="px-4 py-2 border text-center">Agnes</td>
                <td class="px-4 py-2 border text-center">0045678901</td>
                <td class="px-4 py-2 border space-y-2">
                  <!-- Membuat Class untuk center kan input:radio nya -->
                  <div class="flex items-center justify-center gap-x-6">
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_1"
                        id="kehadiran"
                        class="m-[5px]"
                      />Hadir</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_1"
                        id="kehadiran"
                        class="m-[5px]"
                      />Sakit</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_1"
                        id="kehadiran"
                        class="m-[5px]"
                      />Izin
                    </label>
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_1"
                        id="kehadiran"
                        class="m-[5px]"
                      />Bolos</label
                    >
                  </div>
                </td>
              </tr>
            </tbody>
            <!-- Isi Table Kedua -->
            <tbody>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border text-center">2.</td>
                <td class="px-4 py-2 border text-center">Savira</td>
                <td class="px-4 py-2 border text-center">0033778906</td>
                <td class="px-4 py-2 border space-y-2">
                  <!-- Membuat Class untuk center kan input:radio nya -->
                  <div class="flex items-center justify-center gap-x-6">
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_2"
                        id="kehadiran"
                        class="m-[5px]"
                      />Hadir</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_2"
                        id="kehadiran"
                        class="m-[5px]"
                      />Sakit</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_2"
                        id="kehadiran"
                        class="m-[5px]"
                      />Izin
                    </label>
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_2"
                        id="kehadiran"
                        class="m-[5px]"
                      />Bolos</label
                    >
                  </div>
                </td>
              </tr>
            </tbody>
            <!-- Isi Table ketiga -->
            <tbody>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border text-center">3.</td>
                <td class="px-4 py-2 border text-center">Ucup</td>
                <td class="px-4 py-2 border text-center">0075539181</td>
                <td class="px-4 py-2 border space-y-2">
                  <!-- Membuat Class untuk center kan input:radio nya -->
                  <div class="flex items-center justify-center gap-x-6">
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_3"
                        id="kehadiran"
                        class="m-[5px]"
                      />Hadir</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_3"
                        id="kehadiran"
                        class="m-[5px]"
                      />Sakit</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_3"
                        id="kehadiran"
                        class="m-[5px]"
                      />Izin
                    </label>
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_3"
                        id="kehadiran"
                        class="m-[5px]"
                      />Bolos</label
                    >
                  </div>
                </td>
              </tr>
            </tbody>
            <!-- Isi Table keempat -->
            <tbody>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border text-center">4.</td>
                <td class="px-4 py-2 border text-center">Surotong</td>
                <td class="px-4 py-2 border text-center">0015588921</td>
                <td class="px-4 py-2 border space-y-2">
                  <!-- Membuat Class untuk center kan input:radio nya -->
                  <div class="flex items-center justify-center gap-x-6">
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_4"
                        id="kehadiran"
                        class="m-[5px]"
                      />Hadir</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_4"
                        id="kehadiran"
                        class="m-[5px]"
                      />Sakit</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_4"
                        id="kehadiran"
                        class="m-[5px]"
                      />Izin
                    </label>
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_4"
                        id="kehadiran"
                        class="m-[5px]"
                      />Bolos</label
                    >
                  </div>
                </td>
              </tr>
            </tbody>

            <!-- Isi Table kelima -->
            <tbody>
              <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 border text-center">5.</td>
                <td class="px-4 py-2 border text-center">Udin</td>
                <td class="px-4 py-2 border text-center">1022413951</td>
                <td class="px-4 py-2 border space-y-2">
                  <!-- Membuat Class untuk center kan input:radio nya -->
                  <div class="flex items-center justify-center gap-x-6">
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_5"
                        id="kehadiran"
                        class="m-[5px]"
                      />Hadir</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_5"
                        id="kehadiran"
                        class="m-[5px]"
                      />Sakit</label
                    >
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_5"
                        id="kehadiran"
                        class="m-[5px]"
                      />Izin
                    </label>
                    <label class="items-center"
                      ><input
                        type="radio"
                        name="Nama_Kehadiran_5"
                        id="kehadiran"
                        class="m-[5px]"
                      />Bolos</label
                    >
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- Button CLick  jika sudah Selesai -->
          <div class="flex justify-end mt-4">
            <button
              class="bg-blue-900 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 mb-1 hover:bg-blue-700"
            >
              <i class="material-symbols-outlined mr10"
                ><a href="Jurnal_Mengajar.html">arrow_forward_ios</a>
              </i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
