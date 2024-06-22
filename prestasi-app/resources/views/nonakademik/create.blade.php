<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahModalLabel">TAMBAH DATA NON AKADEMIK</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('nonakademik.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                    @csrf
                    <div class="max-w-xl">
                        <x-input-label for="id_siswa" value="SISWA" />
                        <x-select-input id="id_siswa" name="id_siswa" class="mt-1 block w-full" required>
                            <option value="">Pilih Siswa</option>
                            @foreach(App\Models\Siswa::all() as $value)
                            <option value="{{ $value->id }}">
                                {{ $value->nama_siswa}}
                            </option>
                            @endforeach
                        </x-select-input>
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="tanggal" value="TANGGAL" />
                        <x-text-input id="tanggal" type="date" name="tanggal" class="mt-1 block w-full" value="{{ old('tanggal')}}" required />
                        <x-input-error class="mt-2" :messages="$errors->get('tanggal')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="kategori_lomba" value="KATEGORI LOMBA" />
                        <x-text-input id="kategori_lomba" type="text" name="kategori_lomba" class="mt-1 block w-full" value="{{ old('kategori_lomba')}}" required />
                        <x-input-error class="mt-2" :messages="$errors->get('kategori_lomba')" />
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="juara_lomba" value="JUARA LOMBA" />
                        <x-select-input id="juara_lomba" name="juara_lomba" class="mt-1 block w-full" required>
                            <option value="">Pilih Juara Lomba</option>
                            <option value="1" {{ old('juara_lomba') === '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('juara_lomba') === '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('juara_lomba') === '3' ? 'selected' : '' }}>3</option>
                        </x-select-input>
                    </div>
                    <div class="max-w-xl">
                        <x-input-label for="tingkat_lomba" value="TINGKAT LOMBA" />
                        <x-text-input id="tingkat_lomba" type="text" name="tingkat_lomba" class="mt-1 block w-full" value="{{ old('tingkat_lomba')}}" required />
                        <x-input-error class="mt-2" :messages="$errors->get('tingkat_lomba')" />
                    </div>
                    <div class="modal-footer ">
                        <x-secondary-button tag="a" data-bs-dismiss="modal">Batal</x-secondary-button>
                        <x-primary-button name="save" value="true">Simpan</x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

﻿

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->