@extends('admin.layout.index')

@section('content')
<div class="card rounded-full p-2">
    <input type="text" wire:model="search" class="form-control w-25" placeholder="Search...">
    <div class="card-body">
        <table class="table table-responsive table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Id Transaksi</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nilai Trx</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>


            </tbody>

        </table>
        <div class="pagination d-flex flex-row justify-content-between">
            <!-- <div class="showData">
                Data Ditampilkan {{$data->count()}} dari {{$data->total()}}
            </div>
            <div>
                {{ $data->links() }}
            </div> -->
        </div>
    </div>
</div>
<div class="tampilData" style="display: none;"></div>
<div class="tampilEditData" style="display: none;"></div>

@endsection