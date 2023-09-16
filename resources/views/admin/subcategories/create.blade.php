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
                                    <h5>SubCategory Information</h5>
                                </div>

                                <form method="POST" action="{{ route('admin.categories.store') }}"
                                    class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">SubCategory Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Category Name"
                                                name="name" id="name" value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                    <div class=" mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">SubCategory Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="text"
                                                placeholder="Category Description" name="description" id="description"
                                                value="{{ old('description') }}" required></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">SubCategory
                                            Image</label>
                                        <div class="form-group col-sm-9">
                                            <div class="dropzone-wrapper">
                                                <div class="dropzone-desc">
                                                    <i class="ri-upload-2-line"></i>
                                                    <p>Choose an image file or drag it here.</p>
                                                </div>
                                                <input type="file" class="dropzone" id="image" name="image"
                                                    accept="image/*" onchange="previewImage()">

                                            </div>
                                        </div>
                                    </div>
                                    <img class="mb-1" id="image-preview"
                                        style="max-width:200px; max-height:200px; margin-top:10px;">

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Parent Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="parent_id">
                                                <option value="">-- None --</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn ms-auto theme-bg-color text-white">Add</button>

                                </form>


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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->


</div>


@endsection