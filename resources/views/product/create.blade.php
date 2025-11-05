@extends('app')
@section('content')

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $er)
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <strong>Alert!</strong> {{ $er }}
    </div>
    @endforeach
</ul>
@endif
<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="mb-3">
                <label for="" class="form-label"> Category</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">Select One</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" placeholder="Enter Product Price" class="form-control" name="product_price">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Status</label> 
                <br>
                <input type="radio" id="is_active_1" name="is_active" value="1"> Publish
                <input type="radio" id="is_active_0" name="is_active" value="0"> Draft
            </div>
        </div>
        <div class="col-sm-6">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" placeholder="Enter Product Name" class="form-control " name="product_name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea name="product_description" id="" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Photo</label>
                <input type="file" class="form-control" name="product_photo">
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-floppy"></i> Save</button>
    <a href="{{ route('product.index') }}" class="btn btn-secondary mt-3"><i class="bi bi-arrow-90deg-left"></i> Back</a>
</form>
@endsection