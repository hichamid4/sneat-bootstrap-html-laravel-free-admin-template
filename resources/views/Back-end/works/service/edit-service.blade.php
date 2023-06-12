@section('navbarContent')
@parent
<?php $activeMenu = $menuData[1]->menu[0]->name ?>
@endsection

@section('title', 'Dashboard - Services')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@extends('layouts.sections.menu.dashboardMenu');

<head>
  @livewireStyles

</head>

@section('content')
<div class="row">
  <div class="card">
    <h5 class="card-header">Hoverable rows</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Service Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            @foreach ($services as $service)
            <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$service->id}}</strong></td>
            <td>{{$service->name}}</td>
            <td>{{$service->description}}</td>
            <td><span class="badge bg-label-primary me-1">{{$service->category->name}}</span></td>
            <td>
              <div class="dropdown">
                <!-- <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu"> -->
                <a class="btn btn-sm btn-warning" href="{{route('back_end.services.edit',[ 'id' => $service->id ])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="btn btn-sm btn-danger" href="{{route('back_end.services.remove',[ 'id' => $service->id ])}}"><i class="bx bx-trash me-1"></i> Delete</a>
                <!-- </div> -->
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
@endsection

@livewireScripts