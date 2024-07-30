
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (request()->routeIs('dashboard'))
                {{ __('Dashboard') }}
            @elseif (request()->routeIs('penduduk'))
                {{ __('Data Penduduk') }}
            @elseif (request()->routeIs('sub-kriteria'))
                {{ __('Data Kriteria & Sub Kriteria') }}
            @elseif (request()->routeIs('penilaian'))
                {{ __('Penilaian') }}
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
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Nama Penduduk</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Nama Kriteria</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Nama Sub Kriteria</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500">Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penilaian as $penilaian)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penilaian->id }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penilaian->penduduk->nama }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penilaian->kriteria->nama }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penilaian->subKriteria->nama }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 border-b border-gray-300 text-gray-500">{{ $penilaian->subKriteria->bobot }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
