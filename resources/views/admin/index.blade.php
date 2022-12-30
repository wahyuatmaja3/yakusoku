@extends('layouts.layoutAdmin')

@section('container')
    <div class="container">
        <div class="row pt-5 mb-4">
            <div class="col td-none">
                <a href="{{ url('/admin') }}">
                    <div class="card text-bg-warning ps-5">
                        <div class="card-body">
                            <div class="display-5 text-secondary">12</div>
                            <h5 class="card-title">Pesanan</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col td-none">
                <a href="{{ url('/admin') }}">
                    <div class="card text-bg-info ps-5">
                        <div class="card-body">
                            <div class="display-5 text-secondary">12</div>
                            <h5 class="card-title">Transaksi</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <p class="fs-4">
                            Transaksi
                        </p>
                    </div>
                    <div class="card-body">
                        <table class="table align-middle">
                            <thead class="text-center">
                                <th>&nbsp;</th>
                                <th>User</th>
                                <th>Transaksi id</th>
                                <th>Harga</th>
                                <th>Metode</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </thead>
                            <tbody class="text-center">
                                <td><input type="checkbox"></td>
                                <td class="d-flex align-items-center">
                                    <img src="{{ url('/assets/img/raw/cos.jpg') }}" alt="" class="rounded-circle me-3" width="30" height="30">
                                    <div class="p">Nama User</div>
                                </td>
                                <td>2</td>
                                <td>Rp. 40000</td>
                                <td>Cod</td>
                                <td>20-02-2022</td>
                                <td><span class="badge text-bg-warning py-2 rounded-pill">Belum dibayar</span></td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection