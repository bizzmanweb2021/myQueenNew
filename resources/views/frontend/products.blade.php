
@extends('frontend.layouts.master')
@section('title', 'Myqueen | Products')
@section('body')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<main class="main account">
    <img src="images/shop-banner.jpg" alt="" class="img-fluid" style="width:100%">
    <div class="container">
        <br> 
        <div class="row cols-2 cols-sm-3 product-wrapper">
            @foreach ($products as $product)
            <div class="product-wrap">
                <div class="product">
                    <figure class="product-media">
                        <a href="{{ route('Product-Details', $product->id) }}">
                            <img src="{{ asset($product->productimagee) }}" alt="product" width="280" height="315">
                        </a>

                        <!-- <form action="" method="post">
          
                            <div class="product-action">
                            <a href="" class="btn-product" title="Add to Cart">Add To Cart</a> 
                            <input type="submit"  class="btn-product" value="Add To Cart">
                            </div>
                            </form> -->
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="{{ route('Product-Details', $product->id) }}">Product details</a>
                        </div>
                        <h3 class="product-name">
                            <a href="{{ route('Product-Details', $product->id) }}">{{ $product->title }}</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">${{ $product->saleprice }}</ins><del class="old-price">${{ $product->regularprice }}</del>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:60%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="{{ route('Product-Details', $product->id) }}" class="rating-reviews">( 16
                                reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- <script>
    $(document).ready(function() {
        $('#ranking').on('change', function() {
            var ranking = $('#ranking').val();
            if (ranking == '1') {
                alert('Please Spend at least $88 to become a Normal member');
            } else if (ranking == '2') {
                alert('Please Spend at least $500 to become a Silver member');
            } else if (ranking == '3') {
                alert('Please Spend at least $1000 to become a Gold member');
            } else if (ranking == '4') {
                alert('Please Spend at least $2000 to become a Diamond member');
            }
        });
    });
</script> -->
<script type="text/javascript">
    $("#ranking").on('change', function(e) {
        e.preventDefault();
        var ranking = $('#ranking').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/mlm-user/ranking/',
            type: 'POST',
            data: {
                "ranking": ranking,
            },
            success: function(response) {},
        });
    });
</script>
@endsection