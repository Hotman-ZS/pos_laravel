@extends('app')
@section('content')
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $er)
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>Alert!</strong> {{ $er }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
    @endif
    <div class="d-flex justify-content-end my-3">
        <a href="{{ route('user.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-90deg-left"></i> Back</a>
    </div>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" name="name" required>

        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>

        <label for="" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required>

        <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-plus-circle"></i> Create</button>
    </form>
@endsection
