@component('layouts.app')
@slot('content')
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Todos</h5>
                <h6>5</h6>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">In Progress</h5>
                <h6>3</h6>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Completed</h5>
                <h6>2</h6>
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
<div class="row my-5">
    <div class="col-md-12">
        <table class="table table-bordered">
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
            </tbody>
        </table>
    </div>
</div>
@endslot
@endcomponent