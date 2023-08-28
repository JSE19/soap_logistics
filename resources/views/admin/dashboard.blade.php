@extends('layouts.admin_layout')
@section('content')
<div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    
                    <h4 class="font-weight-normal mb-3">Total Order <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ $total_order }}</h2>
                    <h6 class="card-text">Completed: {{ $total_completed_order }} </h6> 
                    <h6 class="card-text">Pending: {{ $total_pending_order }}</h6> 
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    
                    <h4 class="font-weight-normal mb-3">Total Product <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ $total_product }}</h2>
                    <!-- <h6 class="card-text">Decreased by 10%</h6> -->
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    
                    <h4 class="font-weight-normal mb-3">Total Revenue <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{ $revenue }}</h2>
                    <!-- <h6 class="card-text">Increased by 5%</h6> -->
                  </div>
                </div>
              </div>
            </div>

            

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Orders</h4>
                    <p>check Orders page for more</p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Address </th>
                            <th> Pacakage(s) </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($top_five_order as $five)
                          <tr>
                            <td> {{ $five->name }} </td>
                            <td> {{ $five->email }} </td>
                            <td> {{ $five->address }} </td>
                            <td> {{ $five->package_ordered }} </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection