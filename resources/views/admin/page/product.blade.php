@extends('admin.layout.index')

@section('content')
<div class="card rounded-full">
    <div class="card-header bg-transparent d-flex justify-content-between">
        <button class="btn btn-info" id="addData">
            <i class="fa fa-plus">
                <span>Tambah Product</span>
            </i>
        </button>
        <input type="text" wire:model="search" class="form-control w-25" placeholder="Search...">
    </div>
    <div class="card-body">
        <table class="table table-responsive table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Date In</th>
                    <th>SKU</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>

                @if ($data->isEmpty())
                <tr class="text-center">
                    <td colspan="9">Belum ada barang</td>
                </tr>
                @else
                @foreach ($data as $y => $x)
                <tr class="align-middle">
                    <td>{{++$y}}</td>
                    <td>
                        <img src="{{asset('storage/product/'.$x->foto)}}" style="width: 100px;">
                    </td>
                    <td>{{$x->created_at}}</td>
                    <td>{{$x->sku}}</td>
                    <td>{{$x->nama_product}}</td>
                    <td>{{$x->type. '' .$x->kategori}}</td>
                    <td>{{$x->harga}}</td>
                    <td>{{$x->quantity}}</td>
                    <td>
                        <button class="btn btn-info editModal" data-id="{{$x->id}}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger deleteData" data-id="{{$x->id}}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>

        </table>
        <div class="pagination d-flex flex-row justify-content-between">
            <div class="showData">
                Data Ditampilkan {{$data->count()}} dari {{$data->total()}}
            </div>
            <div>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
<div class="tampilData" style="display: none;"></div>
<div class="tampilEditData" style="display: none;"></div>

<script>
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    })
    $('#addData').click(function() {
        $.ajax({
            url: "{{route('addModal')}}",
            success: function(response) {
                $('.tampilData').html(response).show();
                $('#addModal').modal('show');
            }
        });
    });

    $('.editModal').click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');

        $.ajax({
            type: "GET",
            url: "{{route('editModal', ['id' => ':id'])}}".replace(':id', id),
            success: function(response) {
                $('.tampiEditlData').html(response).show();
                $('#editModal').modal('show');
            }
        });
    });

    $('.deleteData').click(function(e) {
        e.preventDefault();
        var id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "Delete",
                    url: "{{route('deleteData', ['id' => ':id'])}}".replace(':id', id),
                    success: function(response) {
                        location.reload();
                    }

                })
            }
        })
    });
</script>
@endsection