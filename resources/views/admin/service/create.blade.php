@extends('admin.layout.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <h1>Add New Service</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card card-primary">
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label>Icon / Image</label>
                        <input type="file" name="icon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter Description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Link (Optional)</label>
                        <input type="text" name="link" class="form-control" placeholder="#" value="{{ old('link') }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection