@extends('layouts.app')

@section('title','Create New Product')

@section('content')
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('products.index') }}" class="btn btn-success mb-3">Back</a>

            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                 @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Product</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select class="form-control" name="category_id">
                                        <option >== Choose Category ==</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                        placeholder="Enter Product name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="number" class="form-control" value="{{ old('price') }}" name="price"
                                        placeholder="Enter Product price">
                                    @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Stock</label>
                                    <input type="number" class="form-control" value="{{ old('stock') }}" name="stock"
                                        placeholder="Enter Product stock">
                                    @if ($errors->has('stock'))
                                        <span class="text-danger">{{ $errors->first('stock') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea type="text" class="form-control" value="{{ old('description') }}" name="description"
                                        placeholder="Enter Product description"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </div>
=======
    <a href="{{ route('products.index') }}" class="btn btn-success mb-3">Back</a>

    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Category</label>
                            <select class="form-control" name="category_id" required="">
                                <option selected="" disabled="">== Choose Category ==</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name  }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <span class="text-danger">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter Product name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" class="form-control" value="{{ old('price') }}" name="price"
                                placeholder="Enter Product price">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" value="{{ old('stock') }}"   name="stock"
                                placeholder="Enter Product stock">
                            @if ($errors->has('stock'))
                                <span class="text-danger">{{ $errors->first('stock') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea type="text" class="form-control" value="{{ old('description') }}"   name="description"
                                placeholder="Enter Product description"></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
>>>>>>> 19af8ad6df22cc1d7782b4b7ab7c1f1ae8b19397
                    </div>
                </div> <!-- /.card -->
            </form>
        </div>
    </div>
@endsection
