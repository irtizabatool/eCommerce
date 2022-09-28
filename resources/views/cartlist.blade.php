@extends('master')
@section('content')
    <div class="custom-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Result for Products</h3>
                @foreach ($products as $item)
                    <div class="row searched-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img src="{{ $item->gallery }}" class="trending-img">
                            </a>
                        </div>
                        <div class="col-sm-4">
                                <div class="">
                                    <h3>{{ $item->name }}</h3>
                                    <h5>{{ $item->description }}</h5>

                                </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removefromcart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
