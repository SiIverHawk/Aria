@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    @include('layouts.sidebar')
    @include('layouts.sidebar-mobile')
    <div class="col-md-9 col-lg-10 ml-lg-auto px-4 dashboard" id="dashboard">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <button class="btn btn-light d-md-none" id="btn-toggle"><i class="fa fa-bars"></i> Toggle menu</button>
        <h1 class="h2">Dashboard</h1>
      </div>
      <div class="chart-wrapper justify-content-center">
        <canvas class="my-4" id="myChart" width="600" height="350"></canvas>
      </div>
    </div>
  </div>
</div>

@endsection