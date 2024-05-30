<div class="table-responsive">
    <table class="table table-striped table-hover border">
        <thead class="table-dark">
            <tr class="bordoorang">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roleRequest as $user)
                <tr class="bordoorang">
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @switch($role)
                            @case('amministratore')
                                <form action="{{ route('admin.setAdmin', compact('user')) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-success text-white">Confirm <i class="fa-solid fa-check"></i></button>
                                </form>
                                <form action="{{ route('admin.rejectAdmin', compact('user')) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-danger text-white">Reject <i class="fa-solid fa-times"></i></button>
                                </form>
                                @break
                            @case('revisore')
                                <form action="{{ route('admin.setRevisor', compact('user')) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-success text-white">Confirm <i class="fa-solid fa-check"></i></button>
                                </form>
                                <form action="{{ route('admin.rejectRevisor', compact('user')) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-danger text-white">Reject <i class="fa-solid fa-times"></i></button>
                                </form>
                                @break
                            @case('redattore')
                                <form action="{{ route('admin.setWriter', compact('user')) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-success text-white">Confirm <i class="fa-solid fa-check"></i></button>
                                </form>
                                <form action="{{ route('admin.rejectWriter', compact('user')) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-danger text-white">Reject <i class="fa-solid fa-times"></i></button>
                                </form>
                                @break
                        @endswitch
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
