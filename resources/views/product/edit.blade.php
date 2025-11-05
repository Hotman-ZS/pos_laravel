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
    <form action="{{ route('product.update', $edit->id) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label"> Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select One</option>
                        @foreach ($categories as $category)
                            <option {{ $edit->category_id == $category->id ? 'selected': '' }} value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="number" placeholder="Enter Product Price" class="form-control" name="product_price" value="{{ $edit->product_price }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <br>
                    <input type="radio" id="is_active_1" name="is_active" value="1" {{ $edit->is_active == 1 ? 'checked' : '' }}> Publish
                    <input type="radio" id="is_active_0" name="is_active" value="0" {{ $edit->is_active == 0 ? 'checked' : '' }}> Draft
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" placeholder="Enter Product Name" class="form-control " name="product_name"
                    value="{{ $edit->product_name }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea name="product_description" id="" class="form-control">{{ $edit->product_description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Photo</label>
                    <input type="file" class="form-control" name="product_photo"><img width="100" src="{{ asset('storage/'. $edit->product_photo) }}" alt="{{ $edit->product_name }}">
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-floppy"></i> Save Changes</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary mt-3"><i class="bi bi-arrow-90deg-left"></i>
            Back</a>
    </form>
@endsection
