@component('layouts.app')
@slot('content')
<div class="jumbotron">
    <h1 class="display-4">Todo Apps</h1>
    <p class="lead">This is simple project to show CRUD features using Laravel Framework</p>
    <hr class="my-4">
    <p>Simple Analytics</p>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Todos</h5>
                    <h6>{{ $total_todos }}</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">In Progress</h5>
                    <h6>{{ $total_progress }}</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Completed</h5>
                    <h6>{{ $total_completed }}</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create New Todo</h6>
                    <a href="{{ route('todo.create') }}" class="btn btn-primary btn-sm">New Todo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row my-5">
    <div class="col-md-12">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($todos as $todo)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->description }}</td>
                    <td>
                        <span class="badge {{ $todo->status == 1 ? 'badge-success' : 'badge-info' }}">
                            {{ $todo->status == 1 ? 'Completed' : 'In-Progress' }}
                        </span>
                    </td>
                    <td>{{ date('d M Y', strtotime($todo->created_at)) }}</td>
                    <td>
                        <a href="{{ route('todo.edit', $todo) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('todo.delete', $todo) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" align="center">No Todo</td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endslot
@endcomponent