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
        <form action="{{ !isset($coupon) ? route('admin.coupons.store') : route('admin.coupons.update', $coupon) }}" method="POST" class="col-md-12">
            @csrf
            @if(isset($coupon))
                @method('PUT') <!-- Only include PUT if $coupon is set (edit mode) -->
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
                          >coupon_code</label
                        >
                        <div class="col-md-9 p-0">
                          <input
                            type="text"
                            class="form-control input-full"
                            name="coupon_code"
                            placeholder="coupon_code"
                            value="{{ isset($coupon) ? $coupon->coupon_code : ""}}"
                          />
                        </div>
                    </div>

                        <div class="form-group form-inline">
                          <label
                            for="inlineinput"
                            class="col-md-3 col-form-label"
                            >discount_percentage</label
                          >
                          <div class="col-md-9 p-0">
                            <input
                              type="text"
                              class="form-control input-full"
                              name="discount_percentage"
                              placeholder="discount_percentage"
                              value="{{ isset($coupon) ? $coupon->discount_percentage : ""}}"
                            />
                          </div>
                      </div>
                  
                
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{route('admin.coupons')}}" type="button" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

    <script>
        @if(isset($coupon))
        if({{$coupon->role_as}} == 1)
        document.getElementById('flexRadioDefault2').setAttribute("checked","");
        else
        document.getElementById('flexRadioDefault1').setAttribute("checked","");
        @endif
    </script>
@endsection
