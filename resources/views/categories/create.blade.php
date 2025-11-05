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
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label"> Name</label>
            <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}" required
            placeholder="Enter you category name">
        </div>
        <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-floppy"></i> Save</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary mt-3"><i class="bi bi-arrow-90deg-left"></i> Back</a>
    </form>
@endsection
