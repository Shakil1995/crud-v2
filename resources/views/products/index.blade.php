@extends('layouts.app')

@section('title', 'Products List')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add Product</a>

            <table id="datatable" class="display table table-sm">
                <thead>
                    <tr class="text-center">
                        <th style="width:7%;">SL NO</th>
                        <th style="width:15%;">Category</th>
                        <th>Name</th>
                        <th style="width:10%;">Price</th>
                        <th style="width:10%;">Stock</th>
                        <th style="width:15%;">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @if ($products)
                        @foreach ($products as $key => $product)
                            <tr class="text-center">
                                <td><b>{{ ++$key }}</b></td>
                                <td>{{ optional($product->category)->category_name ?? 'null' }}</td>
                                <td>{{ $product->name ?? 'null' }}</td>
                                <td>{{ $product->price ?? 'null' }}</td>
                                <td>{{ $product->stock ?? 'null' }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                            <a href="{{ route('products.show', $product->id) }}"class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i></a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i></a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    @else
                        <tr>
                            <td colspan="6">No Product Found!</td>
                        </tr>
                    @endif

                </tbody>
            </table>

        </div>
    </div>
@endsection
