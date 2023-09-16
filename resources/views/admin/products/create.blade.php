@extends('layouts.admin')
@section('content')
<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" method="POST"
                                    action="{{ route('products.create') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="name">Product Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                id="name" name="name" placeholder="Product Name"
                                                value="{{ old('name') }}">
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
                                                <option disabled selected>Choose a category</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">
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
                                            <input class="form-control @error('price') is-invalid @enderror" type="number"
                                                id="price" name="price" placeholder="Price" value="{{ old('price') }}">
                                            @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="quantity">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('quantity') is-invalid @enderror"
                                                type="number" id="quantity" name="quantity" placeholder="Quantity"
                                                value="{{ old('quantity') }}">
                                            @error('quantity')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Active</label>
                                        <div class="col-sm-9">
                                            <label class="switch">
                                                <input name="active" type="checkbox" checked=""><span
                                                    class="switch-state"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0"
                                            for="description">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                id="description" name="description" rows="4"
                                                placeholder="Description">{{ old('description') }}</textarea>
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0" for="image">Product Image</label>
                                        <div class="col-sm-9">

                                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                                id="image" name="image" accept="image/*" onchange="previewImage()">

                                            @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <img id="image-preview" style="max-width:200px; max-height:200px; margin-top:10px;">

                                    <div class="mb-4 row justify-content-center">
                                        <button class="btn btn-primary btn-lg btn-block col-sm-6" type="submit">Add
                                            Product</button>
                                    </div>
                                </form>



                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function previewImage() {
        var fileInput = document.getElementById('image');
        var imagePreview = document.getElementById('image-preview');

        // Check if file is selected
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    </script>
    <!-- New Product Add End -->

    </body>

    @endsection