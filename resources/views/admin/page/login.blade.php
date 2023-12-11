<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/custome.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Toko Kazayya</title>
</head>

<body>
    <main class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 m-auto" style="width: 30vw;">
            <div class="card-header bg-transparent text-center">
                <h5>{{$name}}</h5>
            </div>
            <form action="{{route('loginProses')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-5 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control-plaintext p-2" id="email" name="email" value="" autocomplete="off" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-5 col-form-label">Password</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent ">
                    <button class="btn btn-success" type="submit w-100 mt-2">Login Now</button>
                    <button class="btn btn-danger" type="submit w-100 mt-2">Lupa Password</button>
                </div>
            </form>
        </div>

    </main>
</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="{{asset('js/custom.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
@include('sweetalert::alert', ['cdn' -> {https://cdn.jsdelivr.net/npm/sweetalert2@11}])
</html>