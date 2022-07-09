@extends('admin.layout')

@section('menu')
active
@endsection
@section('testimonial')
active
@endsection
@section('title')
Testimonial
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
                <a class="btn btn-success" href="{{ route('testimonial.create') }}"> Create</a>
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
                  <th>Name</th>
                  <th>Agency</th>
                  <th>Comment</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach ($testimonial as $t)
                <tbody>
                <tr>
                    <td>{{ $t->name }}</td>
                    <td>{{ $t->agency }}</td>
                    <td><?php echo $t->content ?></td>
                    <td>
                        <div style="width: 200px;">
                            <img src="{{ asset('storage/' . $t->image) }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                    </td>

                    <td><form action="{{ route('testimonial.destroy',$t->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('testimonial.edit',$t->id) }}">Edit</a>
        
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


{!! $testimonial->links() !!}

@endsection