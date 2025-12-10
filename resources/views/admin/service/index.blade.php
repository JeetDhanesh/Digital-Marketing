@extends('admin.layout.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6"><h1>Services</h1></div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-success" href="{{ route('admin.services.create') }}"> Create New Service</a>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif

        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td><img src="/uploads/services/{{ $service->icon }}" width="50"></td>
                            <td>{{ $service->title }}</td>
                            <td>{{ Str::limit($service->description, 50) }}</td>
                            <td>
                                <form action="{{ route('admin.services.destroy',$service->id) }}" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.services.edit',$service->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection