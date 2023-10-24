<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="registerModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama <span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="Nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email <span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="email" value="" name="email"  placeholder="Email" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-sm-3 col-form-label">Password <span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" name="password"  placeholder="*****" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat 1 <span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat 2</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat2" placeholder="Alamat lainnya" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tlp" class="col-sm-3 col-form-label">No. Hp<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tlp" name="tlp" placeholder="No. Handphone" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kota" class="col-sm-3 col-form-label">Asal kota<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Asal Kota" required>
                    </div>
                </div>
                <button type="button" class="btn btn-success col-sm-12">Login</button>
                <p class="m-auto text-center p-2" style="font-size:12px">Belum punya akun? Register Now</p>
                <button type="button" class="btn btn-danger col-sm-12" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>