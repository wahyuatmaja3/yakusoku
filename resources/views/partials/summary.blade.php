<div class="col pt-5 bg-light border-start ms-4" style="padding-right: 100px">
    <ul class="list-group-flush">

        <li class="container list-group-item bg-light" >
        @php
        $st = 0;    
        @endphp
        @foreach ($komiks as $komik => $val)

            <div class="d-flex mb-3 border border-dark rounded pe-3 position-relative" style="background-color: var(gray-300)">
                <img src="{{ url("assets/img/komik/cover.jpg") }}" alt="Gambar" height="80" class="pe-3 ">
                <p class="w-100 d-block">{{ $val["judul"] }}</p>
                <p class="ms-auto text-secondary">{{ $val["harga"] }}</p>
                <div class="position-absolute top-0 start-0 bg-warning rounded-pill d-flex justify-content-center  translate-middle" style="width: 25px;height: 25px;">
                    <p class="fw-bold text-white" style="font-size: 14px">{{ $val["qty"] }}</p>
                </div>
            </div>
            @php
                $st+=$val["harga"] * $val["qty"];
            @endphp
        @endforeach
        </li>

        <li class="container list-group-item bg-light">
            <div class="row d-flex justify-content-between mb-3">
                <span class="fs-6 text-secondary col">Subtotal</span>
                <span class="col text-end">Rp {{ number_format($st, 0, ".", ".") }}</span>
            </div>
            <div class="row d-flex justify-content-between mb-3">
                <span class="fs-6 text-secondary col">Shipping</span>
                <span class="col text-end">@isset(session("checkout")["shipping"])
                    {{ isset($shipping)?"Rp " . number_format($shipping->harga, 0, ",", "."):"calculated at next step" }}
                @endisset</span>
            </div>
        </li>

        <li class="container list-group-item bg-light">
            <div class="row d-flex justify-content-between mb-3">
                <span class="fs-5 fw-bold text-secondary col">Total</span>
                <span class="col text-end fs-5">
                @if (isset($shipping))
                    {{ "Rp " . number_format($st + $shipping->harga, 0, ",", ".") }}
                @else 
                    {{ "Rp " . number_format($st, 0, ",", ".") }}
                @endif
            </div>
        </li>


    </ul>

</div>
