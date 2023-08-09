@extends('layouts.master')
@section('container')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
{{-- Card 1 --}}
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Barang</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stok }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-box-open fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
  </div>
{{-- Card 1 --}}
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Total Harga Barang</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 500.000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- Card 1 --}}
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Barang Masuk</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">129</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-indent fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
  </div>
{{-- Card 1 --}}
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Barang Keluar</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">896</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-outdent fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
  </div>


</div>
@endsection
