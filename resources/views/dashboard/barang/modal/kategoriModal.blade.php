@if ($aksi == 'edit' || $aksi == 'hapus')
<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" style="display: block">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $aksi == 'edit' ? 'Edit' : 'hapus' }} Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <a href="/kategori-barang" aria-hidden="true">&times;</a>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    @if ($aksi == 'edit')
                    <form action="/kategori-barang/edit/{{ $target->id }}" method="POST" class="user">
                    @elseif($aksi == 'hapus')
                    <form action="/kategori-barang/hapus/{{ $target->id }}" method="POST" class="user">
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ $aksi == 'edit' ? 'Nama Kategori' : 'apakah anda yakin ingin menghapus Kategori' }}</label>
                            <input {{ $aksi == 'hapus' ? 'disabled' : '' }}type="text" class="form-control" id="name" name="nama" autocomplete="off" required
                                value="{{ $target->name }}">
                        </div>
                        <div class="modal-footer">  
                            <a href="/kategori-barang" class="btn btn-secondary">Close</a>
                            <input type="submit" class="btn {{ $aksi == 'edit' ? 'btn-primary' : 'btn-danger' }}" value="{{ $aksi == 'edit' ? 'Simpan' : 'Hapus' }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-2">
                    <form action="/kategori-barang/tambah" method="POST" class="user">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" class="form-control" id="name" name="nama" autocomplete="off" required
                                placeholder="Nama Kategori">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
