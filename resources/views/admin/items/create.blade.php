@extends('layouts.admin')
@section('content')
<div class="container">
 <div class="card shadow mb-4">
  <div class="card-header">
   <h4>Create Item</h4>
  </div>
  <div class="card-body">
    <form action="{{route('backend.items.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
       <label for="" class="form-label">Code No</label>
       <input type="text" name="code_no" class="form-control" placeholder="IT-001">
    </div>
    <!-- Item Name -->
    <div class="mb-3">
       <label for="" class="form-label">Item Name</label>
       <input type="text" name="name" class="form-control">
    </div>
    <!-- Image -->
    <div class="mb-3">
       <label for="" class="form-label">Image</label>
       <input type="file" accept="image/*" name="image" class="form-control">
    </div>
    <!-- price -->
     <div class="mb-3">
       <label for="" class="form-label">Price</label>
       <input type="number" name="price" class="form-control">
    </div>
    <!-- discount -->
     <div class="mb-3">
       <label for="" class="form-label">Discount</label>
       <input type="number" name="discount" class="form-control">
    </div>
    <!-- in stock -->
     <div class="mb-3">
       <label for="in_stock" class="form-label">In Stock</label>
       <select name="in_stock" id="in_stock" class="form-select">
        <option value="1" selected>Yes</option>
        <option value="0">No</option>
       </select>
    </div>
    <!-- decription -->
    <div class="mb-3">
       <label for="" class="form-label">Description</label>
       <textarea name="decription" class="form-control" id="decription"></textarea>
    </div>
    <!-- category -->
    <div class="mb-3">
       <label for="" class="form-label">Category</label>
       <select name="category_id" id="category_id" class="form-select">
         <option value="">Choose Category</option>
         @foreach($categories as $category)
         <option value="{{$category->id}}">{{$category->name}}</option>
         @endforeach
       </select>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary px-4"> Create Item</button>
    </div>
    </form>
  </div>
 </div>
</div>
@endsection