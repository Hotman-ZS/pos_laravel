@extends('app')
@section('content')

    {{-- @dd('users') --}}
    <div class="d-flex justify-content-end my-3">
        <a href="{{ route('category.create') }}" class="btn btn-primary "><i class="bi bi-plus-circle"></i> Add Category</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach ($datas as $i => $data)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $data->category_name }}</td>
                <td>
                    <a href="{{ route('category.edit', $data->id) }}" class="btn btn-success btn-sm"><i
                            class="bi bi-pencil-square"></i>
                        Edit </a>

                    <form action="{{ route('category.destroy', $data->id) }}" method="post"
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
