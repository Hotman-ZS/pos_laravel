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
<form action="{{ route('category.update', $edit->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="" class="form-label"> Name</label>
        <input type="text" class="form-control" name="category_name" value="{{ $edit->category_name }}" required
            placeholder="Enter you category name">
    </div>
    <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-floppy"></i> Save Changes</button>
    <a href="{{ route('category.index') }}" class="btn btn-secondary mt-3"><i class="bi bi-arrow-90deg-left"></i> Back</a>
</form>
@endsection
