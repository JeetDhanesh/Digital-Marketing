@extends('admin.layout.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <h1>Edit Service</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $service->title }}">
                    </div>
                    <div class="form-group">
                        <label>Icon / Image</label>
                        <input type="file" name="icon" class="form-control">
                        <img src="/uploads/services/{{ $service->icon }}" width="100" class="mt-2">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ $service->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Link (Optional)</label>
                        <input type="text" name="link" class="form-control" value="{{ $service->link }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection