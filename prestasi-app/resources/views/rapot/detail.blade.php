@foreach ($rapots as $rapot)
<div class="modal fade" id="openModel_{{ $rapot->id}}" tabindex="-1" aria-labelledby="openModalLabel_{{ $rapot->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 font-bold" id="openModalLabel_{{ $rapot->id }}">INFORMASI DATA NILAI RAPOT SISWA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"></div>

            <div class="w-full p-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <form action="{{ route('searchSiswa') }}" method="GET">
                        <div class="flex">
                            <div class="flex-auto">
                                <div class="font-bold">
                                    <label>NIS</label>
                                </div>
                                <div>
                                    <p>{{ $rapot->siswa->nis }}</p>
                                </div>
                            </div>

                            <div class="flex-auto">
                                <div class="font-bold">
                                    <label>NAMA SISWA</label>
                                </div>
                                <div>
                                    <p>{{ $rapot->siswa->nama_siswa }}</p>
                                </div>
                            </div>

                            <div class="flex-auto">
                                <div class="font-bold">
                                    <label>KELAS</label>
                                </div>
                                <div>
                                    <p>{{ $rapot->siswa->kelas }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-auto">
                                <div class="font-bold">
                                    <label>TAHUN PELAJARAN</label>
                                </div>
                                <div>
                                    <p>{{ $rapot->siswa->tahun_pelajaran }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-300">
                                <thead>
                                    <p class="font-bold">CAPAIAN KOMPETENSI</p>
                                    <br>
                                    <tr>
                                        <th class="py-2 px-4 bg-gray-100 border-b ">No.</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Mata Pelajaran</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Nilai Pengetahuan</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Huruf</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Nilai Keterampilan</th>
                                        <th class="py-2 px-4 bg-gray-100 border-b">Huruf</th>
                                    </tr>
                                    <br>

                                    <div class="flex-auto">
                                        <tr>
                                            <td>1</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>Pendidikan Agama dan Budi Pekerti</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>PPKN</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>Bahasa Indonesia</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>Matematika</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>IPA</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>IPS</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>PJOK</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>Seni Budaya</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="text-center">
                                            <td>9</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>Basa Sunda</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="py-2 px-4 border-r">
                                                <div class="font-bold">
                                                    <label>Bahasa Inggris</label>
                                                </div>
                                                <div>
                                                    <p>{{ $rapot->mapel->nilai_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_pengetahuan }}</p>
                                                    <p>{{ $rapot->mapel->nilai_keterampilan }}</p>
                                                    <p>{{ $rapot->mapel->huruf_keterampilan }}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </div>
                                </thead>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach