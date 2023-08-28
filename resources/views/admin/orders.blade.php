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
      <div class="card-body" style ="overflow-x:auto;">
        <h4 class="card-title">Orders</h4>
        <p class="card-description"> All Orders</p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Package</th>
              <th>Price</th>
              <th>Delivery Status</th>
              <th>Complete Order</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
              <tr>
                  <td>{{ $order->email }}</td>
                  <td>{{ $order->phone }}</td>
                  <td>{{ $order->address }}</td>
                  <td>{{ $order->package_ordered }}</td>
                  <td>{{ $order->price }}</td>
                  @if($order->delivery_status == 0)
                  <td><strong id="statusText">Pending</strong></td>
                  <td><a href="{{ route('complete_order',$order->id) }}" style="cursor: pointer;" onclick="return confirm('Are you sure you want to Confirm Order Delivery? ')"><label class="badge badge-success" >Complete</label></a></td>
                  @else
                  <td><strong id="statusText">Completed</strong></td>
                  @endif 
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
                  {!!$orders->withQueryString()->links('pagination::bootstrap-4')!!}
            </span>
                  </div>
                </div>
              </div>
</div>
@endsection