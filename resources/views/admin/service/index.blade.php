@extends('admin.layout')

@section('menu')
active
@endsection
@section('service')
active
@endsection
@section('title')
Service
@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="pull-right">
                <a class="btn btn-success" href="{{ route('service.create') }}"> Create</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach ($service as $s)
                <tbody>
                <tr>
                    <td>{{ $s->title }}</td>
                    <td><?php echo $s->content ?></td>
                    <td>
                        <div style="width: 200px;">
                            <img src="{{ asset('storage/' . $s->image) }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                    </td>

                    <td><form action="{{ route('service.destroy',$s->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('service.edit',$s->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form></td>

                </tr>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->


{!! $service->links() !!}

@endsection