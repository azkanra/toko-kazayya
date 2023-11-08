<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$title}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('updateData', $data->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="SKU" class="col-sm-5 col-form-label">SKU</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="SKU" name="sku" value="{{$data->sku}}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameProduct" class="col-sm-5 col-form-label">Nama Product</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="nameProduct" name="nama" value="{{$data->nama_product}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-5 col-form-label">Jumlah Barang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="quantity" name="quantity" value="{{$data->quantity}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-5 col-form-label">Type Product</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="type" name="type">
                                <option value="">Pilih Type</option>
                                <option value="pria" {{$data->type === 'pria' ? 'selected' : '' }}>Pria</option>
                                <option value="wanita" {{$data->type === 'wanita' ? 'selected' : '' }}>Wanita</option>
                                <option value="anak-anak" {{$data->type === 'anak-anak' ? 'selected' : '' }}>Anak-anak</option>
                            </select>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-5 col-form-label">Kategori Product</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="kategori" name="kategori">
                                <option value="">Pilih Kategori</option>
                                <option value="gamis" {{$data->kategori === 'gamis' ? 'selected' : '' }}>Gamis</option>
                                <option value="mukena" {{$data->kategori === 'mukena' ? 'selected' : '' }}>Mukena</option>
                                <option value="daster" {{$data->kategori === 'daster' ? 'selected' : '' }}>Daster</option>
                                <option value="jilbab" {{$data->kategori === 'jilbab' ? 'selected' : '' }}>Jilbab</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-5 col-form-label">Harga Product</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="harga" name="harga" value="{{$data->harga}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-5 col-form-label">Foto Product</label>
                        <div class="col-sm-7">
                            <input type="hidden" name="foto" value="{{$data->foto}}">
                            <img src="{{asset('storage/product/'.$data->foto)}}" id="preview" alt="" class="mb-2" style="width: 100px;">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="foto" name="foto" onchange="previewImg()">

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const preview = document.querySelector('#preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto.files[0]);

        oFReader.onload = function(oFREven) {
            preview.src = ofREven.target.result;
        }
    }
</script>