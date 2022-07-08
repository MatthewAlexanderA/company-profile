@extends('admin.layout')

@section('menu')
active
@endsection
@section('slider')
active
@endsection
@section('title')
Sliders
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
                <a class="btn btn-success" href="{{ route('slider.create') }}"> Create</a>
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
                @foreach ($slider as $s)
                <tbody>
                <tr>
                    <td>{{ $s->title }}</td>
                    <td>{{ $s->content }}</td>
                    <td>
                        <div style="width: 300px;">
                            <img src="{{ asset('storage/' . $s->image) }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                    </td>

                    <td><form action="{{ route('slider.destroy',$s->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('slider.edit',$s->id) }}">Edit</a>
        
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


{!! $slider->links() !!}

@endsection