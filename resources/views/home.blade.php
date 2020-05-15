@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link active"><i class="fa fa-home feather"></i> Dashboard</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-file-invoice feather"></i> Orders</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-shopping-cart feather"></i> Products</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user-friends feather"></i> Customers</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-file-excel feather"></i> Reports</a></li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-center align-items-center px-3 mt-4 mb-1 text-muted"><span>Chat</span></h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Jhon Doe</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Jhon Doe</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Jhon Doe</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Jhon Doe</a></li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-center align-items-center px-3 mt-4 mb-1 text-muted"><span>Chat rooms</span></h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Sales</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Accounting</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Storage</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user feather"></i>Co-workers</a></li>
        </ul>
      </div>
    </nav>
    <div class="col-md-9 col-lg-10 ml-sm-auto px-4 dashboard">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <canvas class="my-4 w-100" id="myChart" width="2958" height="1248" style="display: block; width: 1479px; height: 624px;"></canvas>
    </div>
  </div>
</div>

@endsection