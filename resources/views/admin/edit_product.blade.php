<base href="/public">
@extends('layouts.admin_layout')
@section('content')
@if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            X
                    </button>
                {{session()->get('message')}}
                
                </div>
            @endif
<div class="row">
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Product</h4>
                    <!--<p class="card-description"> Basic form elements </p>-->
                    <form class="forms-sample" method="POST" action="{{ route('edit_a_product',$product->id) }}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="package_name">Package Name</label>
                        <input type="text" class="form-control" name="package_name" value="{{ $product->package_name }}">
                      </div>
                      <div class="form-group">
                        <label for="package_price">Price</label>
                        <input type="number" class="form-control" name="package_price" value="{{ $product->price }}">
                      </div>
                      <div class="form-group">
                        <label for="package_price">Previous Image</label>
                        <br>
                        <img src="{{ asset('product_images/' . $product->package_image) }}" alt="Package Image" style="width:10%; height:10%">
                        <label for="changeImageCheckbox">Do you want to change product image? <input type="checkbox" id="changeImageCheckbox" onchange="toggleImageUpload()"></label>
                        
                      </div>
                      <div class="form-group" id="imageUpload" style="display: none;">
                        <label for="package_price">New Image</label>
                        <input type="file" class="form-control" name="package_image" id="productImage" accept=".jpg, .jpeg, .png">
                      </div>
                      <div class="form-group">
                        <label for="package_content">Package Contents(seperate with comma)</label>
                        <textarea class="form-control" id="package_content" name="package_content" rows="4">{{ $product->package_content }}</textarea>
                      </div>
                       
                      <!-- <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div> -->
                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div> -->
                      <!-- <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div> -->
                      <!-- <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                      </div> -->
                      
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <!--<button class="btn btn-light">Cancel</button>-->
                    </form>
                  </div>
                </div>
              </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contentInput = document.getElementById('package_content');

            contentInput.addEventListener('input', function() {
                const value = contentInput.value;
                const isValid = /^[a-zA-Z0-9\s,\(\)\-\.]+$/m.test(value);
                contentInput.setCustomValidity(isValid ? '' : 'Only comma-separated values are allowed.');
            });
        });
</script>
<script>
        function toggleImageUpload() {
            var checkbox = document.getElementById('changeImageCheckbox');
            var fileInput = document.getElementById('imageUpload');

            if (checkbox.checked) {
                fileInput.style.display = 'block';
            } else {
                fileInput.style.display = 'none';
            }
        }
    </script>
<script>
    document.getElementById('productImage').addEventListener('change', function() {
        var allowedExtensions = ['.jpg', '.jpeg', '.png'];
        var fileInput = this;
        var selectedFile = fileInput.files[0];
        var fileExtension = selectedFile.name.split('.').pop().toLowerCase();

        if (!allowedExtensions.includes('.' + fileExtension)) {
            alert('Please choose a valid image file (jpg, jpeg, or png).');
            fileInput.value = ''; // Clear the selected file
        }
    });
</script>

@endsection