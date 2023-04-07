@extends('content.user-interface.ui-navbar')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Categories</h4>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTop">
        Add new Category
      </button>
      <!-- End button trigger modal -->
    </div>

    <div class="card-body">
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

<!-- Modal -->
<div class="modal modal-top fade" id="modalTop" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" method="post" action="{{ route('addCategory') }}">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="modalTopTitle">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
            <label for="category" class="form-label">Category name</label>
            <input type="text" id="category" name="category_name" class="form-control" placeholder="Enter Name">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-outline-secondary" role="button" data-bs-dismiss="modal" value="Close">
        <input type="submit" role="button" class="btn btn-primary">
      </div>
    </form>
  </div>
</div>