@php
$isNavbar = false;
@endphp

@extends('layouts/contentNavbarLayout')
@section('navbarContent')
@parent
<?php $activeMenu = $menuData[1]->menu[0]->name ?>
@endsection

@section('title', 'Dashboard - Categories')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@section('content')
<div class="row">
  <div class="col-md-2 ms-auto mb-3">
    <button type="button" class="btn btn-info btnMoadl" data-bs-toggle="modal" data-bs-target="#CategoryModal" data-action="create">Create Service</button>
  </div>
  <div class="card">
    <h5 class="card-header mx-auto">Categories</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Category name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            @foreach ($categories as $category)
            <td><i class="fab fa-angular fa-lg text-danger"></i> <strong>{{$category->id}}</strong></td>
            <td>{{$category->name}}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <button type="button" class="dropdown-item btnMoadl" data-bs-toggle="modal" data-bs-target="#CategoryModal" data-category-id="{{$category->id}}" data-action="edit"><i class="bx bx-edit-alt me-1"></i>Edit</button>
                  <a href="{{route('back_end.works.categories.destroy' , ['id' => $category->id])}}" class="dropdown-item" onclick="confirmation(event)"><i class="bx bx-trash me-1"></i>Delete</a>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@extends('Back-end.modals.category_modal')


<script>
  let modalBody = document.querySelector('.modal-body');
  let modalTitle = document.querySelector('.modal-title');

  // edit Modal 
  function Edit(categoryId) {
    modalTitle.innerHTML = 'Edit Category';
    fetch(`/dashboard/works/categories/${categoryId}`)
      .then(rs => rs.json())
      .then(data => {
        modalBody.innerHTML = `
          <form action="/dashboard/works/categories/${data.id}/edit" id="editForm" method="post">
            @csrf
            <div class="row">
              <div class="col mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" id="name" name="name" class="form-control" value="${data.name}">
              </div>
              </div>
          </form>
          `

        const submitBtn = document.getElementById('submitBtn');
        submitBtn.addEventListener('click', function(event) {
          const form = document.getElementById('editForm');
          form.submit();
        });
      })
      .catch(err => console.log('Error: ', err));

  }

  // create Modal
  function create() {
    modalTitle.innerHTML = 'Create category';
    fetch(`/dashboard/works/categories/createModal`)
      .then(rs => rs.json())
      .then(data => {
        modalBody.innerHTML = `
          <form action="/dashboard/works/categories/store" id="createForm" method="post">
            @csrf
            <div class="row">
              <div class="col mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>
            </div>
          </form>
          `

      })
      .catch(err => console.log('Error: ', err));


    const submitBtn = document.getElementById('submitBtn');
    submitBtn.addEventListener('click', function(event) {
      const form = document.getElementById('createForm');
      form.submit();
    });

  }


  // action Buttons
  let buttons = document.querySelectorAll('.btnMoadl');
  buttons.forEach(function(button) {
    button.addEventListener('click', function(event) {
      let categoryId = this.getAttribute('data-category-id');
      let action = this.getAttribute('data-action');
      if (action == 'edit') {
        Edit(categoryId);
      }
      if (action == 'create') {
        create();
      }
    });
  });


  // delete confirmation
  function confirmation(ev) {
    ev.preventDefault();
    let urlToRedirect = ev.currentTarget.href;
    console.log(urlToRedirect);
    swal({
        title: `Are you sure you want to delete this record ?`,
        text: "You won't be able to revert this delete",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = urlToRedirect;
        }
      });
  };
</script>


@endsection