@foreach($nonakademiks as $data)
<div class="modal fade" id="exampleModal_{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel_{{$data->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel_{{$data->id}}">EDIT DATA NON AKADEMIK</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                   <form method="post" action="{{ route('nonakademik.update', $data->id) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('PATCH')
                        <div class="max-w-xl">
                            <x-input-label for="nama_siswa" value="NAMA SISWA" />
                            <x-text-input id="nama_siswa" type="text" name="nama_siswa" class="mt-1 block w-full" value="{{ old('nama_siswa')}}"
                                required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_siswa')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="kelas" value="KELAS" />
                            <x-text-input id="kelas" type="text" name="kelas" class="mt-1 block w-full" value="{{ old('kelas')}}"
                                required />
                            <x-input-error class="mt-2" :messages="$errors->get('kelas')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="tanggal" value="TANGGAL" />
                            <x-text-input id="tanggal" type="date" name="tanggal" class="mt-1 block w-full" value="{{ old('tanggal')}}"
                                required />
                            <x-input-error class="mt-2" :messages="$errors->get('tanggal')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="kategori_lomba" value="KATEGORI LOMBA" />
                            <x-text-input id="kategori_lomba" type="text" name="kategori_lomba" class="mt-1 block w-full" value="{{ old('kategori_lomba')}}"
                                required />
                            <x-input-error class="mt-2" :messages="$errors->get('kategori_lomba')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="tingkat_lomba" value="TINGKAT LOMBA" />
                            <x-text-input id="tingkat_lomba" type="text" name="tingkat_lomba" class="mt-1 block w-full" value="{{ old('tingkat_lomba')}}"
                                required />
                            <x-input-error class="mt-2" :messages="$errors->get('tingkat_lomba')" />
                        </div>
                        <div class="modal-footer">
                        <x-secondary-button tag="a" data-bs-dismiss="modal">Batal</x-secondary-button>
                        <x-primary-button name="save" value="true">Simpan</x-primary-button>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
@endsection


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
