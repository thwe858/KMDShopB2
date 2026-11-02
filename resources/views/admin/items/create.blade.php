@extends('layouts.admin')
@section('content')
<div class="container">
 <div class="card shadow mb-4">
  <div class="card-header">
   <h4>Create Item</h4>
  </div>
  <div class="card-body">
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
       <input type="file" name="image" class="form-control">
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
       <label for="" class="form-label">In Stock</label>
       <select name="in_stock" id="in_stock">
        <option value="1" selected>Yes</option>
        <option value="0">No</option>
       </select>
    </div>
    <!-- decription -->
    <div class="mb-3">
       <label for="" class="form-label">Description</label>
       <textarea name="decription" id="decription"></textarea>
    </div>
    <!-- category -->
    <div class="mb-3">
       <label for="" class="form-label">Category</label>
       <select name="category_id" id="category_id">
         <option value="">Choose Category</option>
       </select>
    </div>
  </div>
 </div>
</div>
@endsection