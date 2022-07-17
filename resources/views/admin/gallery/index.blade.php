@extends('admin.layout')

@section('menu')
active
@endsection
@section('gallery')
active
@endsection
@section('title')
Gallery
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
                <a class="btn btn-success" href="{{ route('gallery.create') }}"> Create</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Image</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($gallery as $g)
                  <tr>
                    <td>{{ $g->title }}</td>
                    <td><?php echo $g->content ?></td>
                    <td>
                        <div style="width: 200px;">
                            <img src="{{ asset('storage/' . $g->image) }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                    </td>
                    <td>{{ $g->category }}</td>

                    <td>
                      <form action="{{ route('gallery.destroy',$g->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('gallery.edit',$g->id) }}">Edit</a>
        
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
                      </form>
                    </td>

                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Image</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                </tfoot>
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


{!! $gallery->links() !!}

@endsection