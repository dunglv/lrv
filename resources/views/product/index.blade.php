@extends('home')
@section('body')
    <div id="top_cart" class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <div class="in-cart">
                    <span class="btn-cart">Cart shopping</span>
                    <div class="infor-cart">
                        <ul class="list-cart">
                            <li>
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                <div class="remove">X</div>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                <div class="remove">X</div>
                            </li>
                            <li>
                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                <div class="remove">X</div>
                            </li>
                        </ul>
                        <div class="total">
                            <span>Total: <strong>100.00$</strong></span>
                            <span><a href="#">Checkout</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container products">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <h1>LIST PRODUCT</h1>
            </div>
            @foreach($products as $pr)
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                <div id="product_{{$pr->id  }}" class="product">
                    <h4><a href="#">{{ $pr->title }}</a></h4>
                    <div class="info">
                        <span>Price: <strong>{{ $pr->price }}$</strong></span>
                        <span>Stock: <strong>{{ $pr->stock }}</strong></span>
                    </div>
                    <div id="add_{{$pr->id}}" class="add">+</div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop