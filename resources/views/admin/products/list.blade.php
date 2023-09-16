@extends('layouts.admin')

@section('content')



<div class="page-body">
    <!-- All Products Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Products</h5>
                            <form class="d-inline-flex">
                                <a href="{{route('product.add')}}"
                                    class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus-square"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive product-table">
                            <div>
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Category Name</th>
                                            <th>Active</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    @if ($product->image)
                                                    <img src="{{ asset('storage/public/images'.$product->image) }}"
                                                        class=" img-fluid" alt="{{ $product->name }}">
                                                    @else
                                                    <img src="{{ asset('images/no_image.jpg') }}" class="img-fluid"
                                                        alt="{{ $product->name }}">
                                                    @endif
                                                </div>
                                            </td>

                                            <td>{{ $product->name }}</td>

                                            <td>{{ Str::words($product->description, 7, '...') }}</td>

                                            <td>{{ $product->price }}</td>

                                            <td>{{ $product->quantity }}</td>

                                            <td>
                                                @if($product->category)
                                            
                                                @endif
                                            </td>

                                            <td>{{ $product->active ? 'Yes' : 'No' }}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>

                                                    </li>

                                                    <li>
                                                        <form
                                                            action=""
                                                            method="POST"
                                                            onsubmit="return confirm('Are you sure you want to delete this product? This action cannot be undone.')">

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                                    class="ri-delete-bin-line"></i></button>
                                                        </form>

                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All Products Table Ends-->

</div>


@endsection