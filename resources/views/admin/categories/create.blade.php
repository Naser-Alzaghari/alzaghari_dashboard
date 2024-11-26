@extends('admin.layouts.admin-masterpage')

@section('content')
<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Forms</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Forms</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Basic Form</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <form action="{{ !isset($category) ? route('admin.categories.store') : route('admin.categories.update', $category) }}" method="POST" class="col-md-12">
            @csrf
            @if(isset($category))
                @method('PUT') <!-- Only include PUT if $category is set (edit mode) -->
            @endif
          <div class="card">
            <div class="card-header">
              <div class="card-title">Form Elements</div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="form-group form-inline">
                        <label
                          for="inlineinput"
                          class="col-md-3 col-form-label"
                          >Name</label>

                        <div class="col-md-9 p-0">
                          <input
                            type="text"
                            class="form-control input-full"
                            name="name"
                            placeholder="Name"
                            value="{{ isset($category) ? $category->name : ""}}"
                          />
                        </div>
                        
                    </div>


                    <div class="form-group">
                        <label for="comment">description</label>
                        <textarea class="form-control" id="comment" rows="5" name="description">{{ isset($category) ? $category->description : ""}}</textarea>
                    </div>
                    </div>
                </div>
                
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{route("admin.categories")}}" type="button" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection
