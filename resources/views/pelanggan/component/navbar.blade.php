<nav class="navbar navbar-expand-sm rounded-3 m-3" style="height: 80px;">
    <div class="d-flex flex-row justify-content-between align-items-center w-full">
        <a class="navbar-brand" href="#">KAZAYYA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContect">
            <ul class="navbar-nav gap-4>
                <li class=" nav-item">
                <a class="nav-link {{Request::path() == '/' ? 'active' : '';}}" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() == 'kategori' ? 'active' : '';}}" href="/kategori">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::path() == 'contact' ? 'active' : '';}}" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Login | Register</button>
                </li>
                <li class="nav-item">
                    <div class="notif">
                        <a href="/transaksi" class="fs-5 nav-link nav-link {{Request::path() == 'transaksi' ? 'active' : '';}}">
                            <i class="fa fa-bag-shopping"></i>
                        </a>
                        @if ($count)
                        <div class="circle">{{$count}}</div>

                        @endif

                    </div>
                </li>
                <li class="nav-item">
                    <div class="notif">
                        <a href="/checkOut" class="fs-5 nav-link nav-link {{Request::path() == 'checkOut' ? 'active' : '';}}">
                            <i class="fa fa-cash-register"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>