@extends('app')
@section('content')
@section('title', 'Master Data Product')

{{-- @dd('users') --}}
<div class="d-flex justify-content-end my-3">
    <a href="{{ route('product.create') }}" class="btn btn-primary "><i class="bi bi-plus-circle"></i> Add Product</a>
</div>
<table class="table table-bordered">
    <tr class="text-center align-middle">
        <th>No</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Price</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
    @foreach ($datas as $i => $data)
    <tr class="text-center align-middle">
        <td>{{ $i + 1 }}</td>
        <td>{{ $data->category->category_name }}</td>
        <td><img width="100" src="{{ asset('storage/'. $data->product_photo) }}" alt="{{ $data->product_name }}"></td>
        <td>{{ $data->product_name }}</td>
        <td>{{ $data->product_price }}</td>
        <td>{{ $data->is_active }}</td>
        <td>
            <a href="{{ route('product.edit', $data->id) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i>Edit </a>

            <form action="{{ route('product.destroy', $data->id) }}" method="post"
                onsubmit="return confirm('Yakin ingin di delete?')" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection