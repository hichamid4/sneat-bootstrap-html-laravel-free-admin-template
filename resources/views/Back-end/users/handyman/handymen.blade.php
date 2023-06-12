@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')
@section('navbarContent')
@parent
<?php $activeMenu = $menuData[1]->menu[0]->name ?>
@endsection

@section('title', 'Dashboard - Handymen')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@section('content')
<div class="row">
  <div class="col-md-2 ms-auto mb-3">
    <button class="btn btn-info btnMoadl" onclick="Livewire.emit('openModal','hello-world')">Create Service</button>
  </div>


</div>
@endsection