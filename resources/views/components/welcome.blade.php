<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <div class="flex items-center">
        <img src="{{ asset('assets/Lambang_Kabupaten_Ende.png') }}" class="h-12 w-auto" alt="Ende Logo" />
        <h1 class="ms-3 text-2xl font-medium text-gray-900">
            Sistem SAW Raskin Kantor Desa Kekandere
        </h1>
    </div>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Selamat datang di sistem saw raskin desa kekandere
    </p>
    <p class="mt-6 text-gray-500 leading-relaxed">
        Sistem SPK Raskin Kantor Desa Kekandere adalah sebuah aplikasi yang dikembangkan oleh Tim Pengembang Raskin Kantor Desa Kekandere. Sistem ini digunakan untuk memberikan keputusan kepada pengguna mengenai pilihan kandidat terbaik berdasarkan kriteria yang ditentukan.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <img src="{{ asset('assets/Lambang_Kabupaten_Ende.png') }}" class="h-10 w-auto" alt="Ende Logo" />
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Jumlah Penduduk Terdaftar di Sistem
            </h2>
        </div>
        <div class="mt-4 flex flex-col items-start">
            <h1 class="text-2xl font-bold text-gray-900">
                1000
            </h1>
            <p class="mt-2 text-lg leading-relaxed font-bold">
                orang
            </p>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <img src="{{ asset('assets/Lambang_Kabupaten_Ende.png') }}" class="h-10 w-auto" alt="Ende Logo" />
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Laporan Urutan Penerima Raskin
            </h2>
        </div>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            <a href="{{ url('/penduduk') }}" class="text-blue-500 hover:underline">Penduduk</a> dapat melihat data penduduk dan urutan penerima.
        </p>
    </div>
</div>

