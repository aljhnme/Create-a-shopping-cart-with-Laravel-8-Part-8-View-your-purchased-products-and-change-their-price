@extends('style')

@section('content')

@include('navbar')
<div class="single-product mt-150 mb-150">
 <div class="container">
  <div class="row">

    <div class="col-md-5">
      <div class="single-product-img">
        <img src="{{ asset('images')}}/{{ $data_product->img_product }}">
      </div>
    </div>
    <div class="col-md-7">
     <div class="single-product-content">
         <h3>{{ $data_product->name_product }}</h3>
         
         @php $start=1;  @endphp 
         @while($start <= 5)

           @if($data_product->rating < $start)
              <span class="fa fa-star"></span>
           @else
              <span class="fa fa-star checked"></span>
           @endif
           
           @php $start++;  @endphp
         @endwhile

         <p class="single-product-pricing">
          ${{ $data_product->price_product }}
         </p>
         <p>
          {{ $data_product->about_product }}
         </p>
        
         @if(Auth::id() != $data_product->user_id)
         <div class="single-product-form">
          <form method="post">
              {{ csrf_field() }}
            <input type="number" id="price_pro_t" placeholder="0">
          </form>
          <div class="alert_e">
            
          </div>
          <a class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
         </div>
         @endif
          <input type="hidden" id="seller_user" value="{{ $data_product->user_id }}">
          <input type="hidden" id="id_product" value="{{ $data_product->id }}">
     </div>
    </div>
   </div>
  </div>
 </div>
@endsection