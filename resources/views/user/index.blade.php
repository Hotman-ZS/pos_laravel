@extends('app')
@section('content')
    {{-- @dd('users') --}}
    <div class="d-flex justify-content-end my-3">
        <a href="{{ route('user.create') }}" class="btn btn-primary "><i class="bi bi-plus-circle"></i>     Add</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ( $users as $i => $user)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i> Edit  </a>

                <form action="{{ route('user.destroy', $user->id) }}" method="post" onsubmit="return confirm('Yakin ingin di delete?')" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
