<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (request()->routeIs('dashboard'))
                {{ __('Dashboard') }}
            @elseif (request()->routeIs('penduduk'))
                {{ __('Data Penduduk') }}
            @elseif (request()->routeIs('kriteria'))
                {{ __('Kriteria') }}
            @elseif (request()->routeIs('sub-kriteria'))
                {{ __('Data Sub Kriteria') }}
            @endif
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">#</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Nama</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Jumlah Nilai Bobot</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Urutan</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penduduks as $penduduk)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penduduk->id }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penduduk->nama }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penduduk->weighted_sum }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penduduk->rank }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penduduk->created_at->format('Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
