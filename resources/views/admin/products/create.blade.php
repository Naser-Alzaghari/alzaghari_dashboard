@extends('admin.layouts.admin-masterpage')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Product Form</h3>
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
                    <a href="#">Product Form</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <form action="{{ !isset($product) ? route('admin.products.store') : route('admin.products.update', $product) }}" method="POST" class="col-12" enctype="multipart/form-data">
                @csrf
                @if(isset($product))
                    @method('PUT')
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Product Details</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ isset($product) ? $product->name : '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="5" name="description">{{ isset($product) ? $product->description : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <select class="form-select" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if (isset($product) && $category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" name="price" value="{{ isset($product) ? $product->price : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price_after_discount">Price After Discount</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control" name="price_after_discount" value="{{ isset($product) ? $product->price_after_discount : '' }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input type="text" class="form-control" name="stock" placeholder="Stock number" value="{{ isset($product) ? $product->stock : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="color-stocks">Color Stocks</label>
                                    <div id="color-stocks">
                                        @if(isset($product))
                                            @foreach($product->colors as $color)
                                                <div class="form-group">
                                                    <label>{{ $color->name }}</label>
                                                    <input type="text" name="color_stocks[{{ $color->id }}]" class="form-control" value="{{ $color->pivot->stock }}">
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="new-color">Add New Color Stock</label>
                                        <select class="form-control" id="new-color" name="new_color_id">
                                            <option value="">Select Color</option>
                                            @foreach($colors as $color)
                                                @if(!isset($product) || !$product->colors->contains('id', $color->id))
                                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <input type="text" name="new_color_stock" class="form-control mt-2" placeholder="Stock">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="images">Product Images</label>
                                    <input type="file" class="form-control-file" name="images[]" multiple>
                                </div>
                                @if (isset($product))
                                    @foreach($product->images as $image)
                                        <div class="form-group mt-2">
                                            <div class="avatar">
                                                <img src="{{ asset('storage/' . $image->image_url) }}" alt="{{ $product->name }}" class="avatar-img rounded">
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="delete_images[]" value="{{ $image->id }}">
                                                <label class="form-check-label">Delete</label>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('admin.products') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
