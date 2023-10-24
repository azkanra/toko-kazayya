@extends('pelanggan.layout.index')

@section('content')
<div class="row mt-4 align-items-center">
    <div class="col-md-6">
        <div class="content-text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum itaque amet distinctio eaque praesentium nulla ut veritatis, sequi harum consequuntur nisi illo architecto sed quam quod accusantium eos saepe ipsam explicabo expedita quibusdam et quisquam pariatur cupiditate. Enim est odit impedit a aspernatur dolore dicta quod? Ratione dignissimos a iusto iure voluptates. Molestias dolorum recusandae tempore, officia tempora porro quibusdam, natus nihil hic expedita soluta et obcaecati dolor consequatur nostrum, reprehenderit neque! Corporis quisquam similique ea repellat, unde eum in, vitae commodi mollitia earum laborum praesentium esse, distinctio qui asperiores omnis beatae? Ad et, nostrum enim iste molestias saepe neque.
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{asset('assets/images/company.png')}}" style="width: 100%" alt="">
    </div>
</div>

<div class="d-flex justify-content-lg-between mt-5">
    <div class="d-flex align-items-center gap-4">
        <i class="fa fa-users fa-2x"></i>
    </div>
    <div>
        <i class="fa fa-home fa-2x"></i>
    </div>
    <div>
        <i class="fa fa-shirt fa-2x"></i>
    </div>
</div>

<h4 class="text-center mt-md-5 mb-md-5">Contact Us</h4>
<hr class="mb-5">
<div class="row mb-md-5">
    <div class="col-md-5">
        <div class="bg-secondary" style="width:100%; height: 50vh; border-radius: 10px;">

        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header text-center">
                <h4>Kritik dan saran</h4>
            </div>
            <div class="card-body">
                <p class="p-0 mb-5 text-lg-center">Kritik dan saran tentang aplikasi</p>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" value="email@example.com" placeholder="Masukkan email Anda">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pesan" placeholder="Masukkan pesan Anda">
                    </div>
                </div>
                <button class="btn btn-primary mt-5 w-100">Kirim pesan Anda</button>
            </div>
        </div>

    </div>
</div>
</div>
@endsection