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
        <form action="{{ !isset($user) ? route('admin.users.store') : route('admin.users.update', $user) }}" method="POST" class="col-md-12">
            @csrf
            @if(isset($user))
                @method('PUT') <!-- Only include PUT if $user is set (edit mode) -->
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
                          >Name</label
                        >
                        <div class="col-md-9 p-0">
                          <input
                            type="text"
                            class="form-control input-full"
                            name="name"
                            placeholder="Name"
                            value="{{ isset($user) ? $user->name : ""}}"
                          />
                        </div>
                      </div>
                  <div class="form-group">
                    <label for="email2">Email Address</label>
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email2"
                      placeholder="Enter Email"
                      value="{{ isset($user) ? $user->email : ""}}"
                    />
                    <small id="emailHelp2" class="form-text text-muted"
                      >We'll never share your email with anyone
                      else.</small
                    >
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      placeholder="Password"
                    />
                  </div>
                  

                  <div class="form-group">
                    <label>role</label><br>
                    <div class="d-flex">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_as" id="flexRadioDefault1" value="0">
                        <label class="form-check-label" for="flexRadioDefault1">
                          user
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="role_as" id="flexRadioDefault2" value="1">
                        <label class="form-check-label" for="flexRadioDefault2">
                          admin
                        </label>
                      </div>
                    </div>
                  </div>



                </div>
                
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{route('admin.users')}}" type="button" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

    <script>
        @if(isset($user))
        if({{$user->role_as}} == 1)
        document.getElementById('flexRadioDefault2').setAttribute("checked","");
        else
        document.getElementById('flexRadioDefault1').setAttribute("checked","");
        @endif
    </script>
@endsection
