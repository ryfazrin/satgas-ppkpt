@extends('layout.main')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User List</h1>
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data User</h4>
                            @if(isset($currentUser) && $currentUser->role_id == 1)
                                <div class="card-header-action">
                                    <a href="{{ route('users.create') }}" class="btn btn-lg btn-info"><i class="fas fa-plus"></i> Tambah Baru</a>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>                                 
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Email</th>
                                            <th>NIPN/NIM</th>
                                            <th>Kontak</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                 
                                        @forelse($users as $user)
                                            <tr>
                                                <td class="text-center">{{ $user->user_id }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->nipn_nim }}</td>
                                                <td>{{ $user->kontak }}</td>
                                                <td class="text-capitalize">
                                                    <div class="badge badge-{{ $user->role_id == 1 ? 'primary' : 'secondary' }}">
                                                        {{ $user->role_id == 1 ? 'Administrator' : 'User' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    @if(isset($currentUser) && $currentUser->role_id == 1)
                                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-action" onclick="return confirm('Yakin Hapus user {{ $user->nipn_nim }}?')" data-toggle="tooltip" title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <span class="text-muted">Akses Ditolak</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak ada data user</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
