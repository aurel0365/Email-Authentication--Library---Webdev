<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #f8f9fa;">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center mb-4">
                    <h3 class="text-primary">Daftar Pengguna</h3>
                    <hr class="w-25 mx-auto">
                </div>

                <div class="card border-0 shadow-lg rounded">
                    <div class="card-body">
                        <!-- Action Buttons -->
                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{ route('users.create') }}" class="btn btn-success">ADD USER</a>
                            <a href="{{ Auth::user()->usertype == 'admin' ? url('admin/dashboard') : url('librarian/dashboard') }}" class="btn btn-secondary">Back</a>
                        </div>

                        <!-- Users Table -->
                        <table class="table table-hover table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">NAME</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">USER TYPE</th>
                                    <th scope="col" class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->usertype }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark btn-sm">SHOW</a>
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-danger">Data Users belum Tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and SweetAlert Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // SweetAlert message
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>

</body>
</html>
