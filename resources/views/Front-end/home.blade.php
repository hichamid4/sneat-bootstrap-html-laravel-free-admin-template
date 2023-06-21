@extends('layouts.blankLayout')

@section('content')
<div class="container">
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Brein</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Categories</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>

       <div class="me-5">
            <li class="dropdown" style="list-style: none;">
             <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">hicham</a>
               <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" >Profile</a></li>
                    <li><a class="dropdown-item" href="#" >Deconnection</a></li>
                </ul>
               
            </li>
        </div>
    </div>
  </div>
</nav>
</div>
@endsection