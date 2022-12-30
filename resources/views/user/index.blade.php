@extends('layouts.main')

@section('container')
    
    <div class="container-fluid d-flex flex-column justify-content-center pt-5">    
        <div class="display-6 text-center mb-4">Selamat, datang {{ auth()->user()->username }}</div>

        <div class="col-8 mx-auto mb-5">
            @if ($transaksis == null)
                <div class="fs-4 text-center">Anda belum melakukan transaksi</div>
            @else
            <table class="table text-center table-light">
                <thead class="table-info">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody >

                    
                        

                    @foreach ($transaksis as $trans)

                        @php
                            $detail_trans = $trans->detailTransaksi;
                        @endphp
                    <tr class="ps-5 text-start table-secondary">
                        <td colspan="5" >{{ $trans->tanggal_transaksi }}</td>
                    </tr>

                    @foreach ($detail_trans as $det => $value)
                    <tr>
                        <td>{{ $det + 1 }}</td>        
                        <td>{{ $value->komik_id }}</td>
                        <td>Rp. 50.000</td>
                        <td>{{ $value->jumlah }}</td>
                        <td>Rp. 50.000</td>
                    </tr>
                @endforeach

                    @endforeach
                </tbody>
            </table>

            @endif


        </div>


        <form action="/logout" method="post" class="d-flex justify-content-center">
            @csrf
            <button type="submit" class="btn btn-danger">Logout <i class="bi bi bi-box-arrow-right"></i></a></button>
        </form>
    </div>
@endsection