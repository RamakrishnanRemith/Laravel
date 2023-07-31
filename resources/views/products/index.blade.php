@extends('products.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Product Detail</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<!--      
    <table class="table table-bordered">
        <tr>
          
            <th>Image</th>
          
            
        </tr>
        @foreach ($products as $product)
        <tr>
           
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            
           
        </tr>
        @endforeach
    </table> -->
    
   
        

<!-- Gallery
<div class="row">
  <div class="w-100 shadow-1-strong rounded mb-4">
     <td><img src="/image/{{ $product->image }}"></td>

    <td><img src="/image/{{ $product->image }}" ></td>
  </div>

  <div class="w-100 shadow-1-strong rounded mb-4">
    <td><img src="/image/{{ $product->image }}" ></td>

    <td><img src="/image/{{ $product->image }}" ></td>
  </div>

  <div class="w-100 shadow-1-strong rounded mb-4">
     <td><img src="/image/{{ $product->image }}" ></td>

     <td><img src="/image/{{ $product->image }}" ></td>
  </div>
</div> -->
<!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="/image/{{ $product->image }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="/image/{{ $product->image }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="/image/{{ $product->image }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="/image/{{ $product->image }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="/image/{{ $product->image }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="/image/{{ $product->image }}"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
@endsection