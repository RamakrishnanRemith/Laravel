@extends('products.layout')
     
@section('content')
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
   <link rel="stylesheet" href="css/homepage.css"/>
<body>
<div class="head">
        <ul>
            <li><a href="/homepage1">HOME</a></li>
            <li><a href="#">LOCATIONS</a>
            <ul class="subhead">
              <li><a href="#">India</a>
                <ul class="topic">
                    <li><a href="#">tamilnadu</a></li>
                    <li><a href="#">kerala</a></li>
                    <li><a href="#">mumbai </a></li>
                </ul>
            
            </li>
            </ul>
            </li>
            <li><a href="#">MUSIC</a></li>
            <li><a href="/products">Product</a>
            <li><a href="/photo">Gallery</a></li>
            <li><a href="#">ONLINE</a></li>
            <li><a href="/contactpage1">CONTACT_US</a></li>
             </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
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
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}
        
@endsection
</body>