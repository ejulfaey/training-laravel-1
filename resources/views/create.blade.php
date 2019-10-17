@component('layouts.app')
@slot('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('todo.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control @if($errors->has('title')) is-invalid @endif">
                        @if($errors->has('title')) <div class="invalid-feedback">{{ $errors->first('title') }}</div> @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control @if($errors->has('description')) is-invalid @endif">{{ old('description') }}</textarea>
                        @if($errors->has('description')) <div class="invalid-feedback">{{ $errors->first('description') }}</div>@endif
                    </div>
                    <a href="{{ route('todo.index') }}" class="btn btn-warning">Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endslot
@endcomponent