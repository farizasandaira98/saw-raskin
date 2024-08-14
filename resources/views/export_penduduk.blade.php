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