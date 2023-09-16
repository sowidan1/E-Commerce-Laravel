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
                                    <h5>Category Information</h5>
                                </div>

                                <form method="POST" action="{{route('categories.create')}}"
                                    class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Category Name"
                                                name="name" id="name" value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                    <div class=" mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="text"
                                                placeholder="Category Description" name="description" id="description"
                                                value="{{ old('description') }}" required></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Category Image</label>
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
                                    <img id="image-preview" style="max-width:200px; max-height:200px; margin-top:10px;">
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

    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- footer En -->
</div>


@endsection