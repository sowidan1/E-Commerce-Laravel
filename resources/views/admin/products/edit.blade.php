@extends('layouts.admin')
@section('content')
<div class="page-body">

    <!-- Edit Product Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Edit Product Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" method="POST"
                                    action="{{ route('admin.products.update', $product->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="name">Product Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                id="name" name="name" placeholder="Product Name"
                                                value="{{ $product->name }}">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title"
                                            for="category_id">Category</label>
                                        <div class="col-sm-9">
                                            <select
                                                class="js-example-basic-single w-100 @error('category_id') is-invalid @enderror"
                                                name="category_id" id="category_id">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="price">Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('price') is-invalid @enderror" type="text"
                                                id="price" name="price" placeholder="Price"
                                                value="{{ $product->price }}">
                                            @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="quantity">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('quantity') is-invalid @enderror"
                                                type="text" id="quantity" name="quantity" placeholder="Quantity"
                                                value="{{ $product->quantity }}">
                                            @error('quantity')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Active</label>
                                        <div class="col-sm-9">
                                            <label class="switch">
                                                <input name="active" type="checkbox"
                                                    {{ $product->active ? 'checked' : '' }}>
                                                <span class="switch-state"></span> </label>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"
                                            for="description">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                id="description" name="description"
                                                placeholder="Product Description">{{ $product->description }}</textarea>
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="image">Product Image</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                                id="image" name="image" accept="image/*">
                                            @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        @if ($product->image)
                                        <img id="image-preview"
                                            src="{{ asset('storage/images/products/'.$product->image) }}"
                                            alt="{{ $product->name }}" class="img-fluid w-25">
                                        @else
                                        <img id="image-preview" src="{{ asset('images/no_image.jpg') }}"
                                            class="img-fluid w-25" alt="{{ $product->name }}">
                                        @endif

                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-9 ml-auto d-flex justify-items-between">
                                            <button type="submit" class="btn btn-success me-3 ml-3">Save
                                                Changes</button>
                                            <a href="{{ route('admin.products') }}"
                                                class="btn btn-danger ml-4">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Product End -->
    @endsection