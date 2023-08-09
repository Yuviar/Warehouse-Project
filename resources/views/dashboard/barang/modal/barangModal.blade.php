<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid p-2">
          <form action="" class="user">
              <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Unggah foto barang</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Nama Barang</label>
                  <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Example input placeholder">
                </div>
                <div class="form-group">
                  <label for="kateg">Kategori</label>
                  <select class="form-control">
                      <option>Default select</option>
                  </select>
                </div>
                <div class="form-row">
                  <div class="col text-center">
                   <label for="name">Jumlah Barang</label>
                   <input type="number" class="form-control" min="0" oninput="validity.valid||(value='');" id="name" autocomplete="off" placeholder="Jumlah Produk">
                  </div>
                  <div class="col text-center">
                   <label for="name">Harga Barang</label>
                   <input type="number" class="form-control" min="0" oninput="validity.valid||(value='');" id="name" autocomplete="off" placeholder="Harga Produk">
                  </div>
                </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>