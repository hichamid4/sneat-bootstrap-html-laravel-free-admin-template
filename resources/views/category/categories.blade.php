@extends('content.user-interface.ui-navbar')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Categories</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <li>
          <a href="{{ url('/category/add') }}">
            <i class="fas fa-plus"></i> Add Category
          </a>
        </li>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->category_name }}</td>
              <td>
                <button class="btn btn-danger delete-btn">Delete</button>
                <button class="btn btn-primary edit-btn">Edit</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection