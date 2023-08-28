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
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body" style="overflow-x:auto;">
        <h4 class="card-title">Products</h4>
        <p class="card-description"> All Products</p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Image</th>
              <th>Package Name</th>
              <th>Content</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
              <td>
                <img src="{{ asset('product_images/' . $product->package_image) }}" style="width:120px; height:80px;" alt="Package Image">
              </td>
              <td>{{ $product->package_name }}</td>
              <td>
                <p style="text-align: justify;">
                  @foreach(explode(',', $product->package_content) as $content)
                      <li>{{ $content}}</li>
                  @endforeach
                </p>
              </td>
              <td>{{ $product->price}}</td>
              
              <td>
                <a href="{{ route('edit_a_product_view',$product->id) }}" onclick="return confirm('Are you sure you want to Edit?')"><label class="badge badge-primary">Edit</label></a>
                <a href="{{ route('delete_a_product',$product->id) }}" onclick="return confirm('Are you sure you want to Delete?')"><label class="badge badge-danger">Delete</label></a>
            </td>
            </tr>
            @endforeach
            <!-- <tr>
              <td>Messsy</td>
              <td>Flash</td>
              <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
              <td><label class="badge badge-warning">In progress</label></td>
            </tr>
            <tr>
              <td>John</td>
              <td>Premier</td>
              <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
              <td><label class="badge badge-info">Fixed</label></td>
            </tr>
            <tr>
              <td>Peter</td>
              <td>After effects</td>
              <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
              <td><label class="badge badge-success">Completed</label></td>
            </tr>
            <tr>
              <td>Dave</td>
              <td>53275535</td>
              <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
              <td><label class="badge badge-warning">In progress</label></td>
            </tr> -->
                      </tbody>
                    </table>
                    <span>
                  {!!$products->withQueryString()->links('pagination::bootstrap-4')!!}
            </span>
                  </div>
                </div>
              </div>
</div>

@endsection