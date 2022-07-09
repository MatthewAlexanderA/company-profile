@extends('admin.layout')

@section('edit')
active
@endsection
@section('about')
active
@endsection
@section('title')
About Us
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
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>
                </tr>
                </thead>
                @foreach ($about as $a)
                <tbody>
                <tr>
                    <td>{{ $a->title }}</td>
                    <td><?php echo $a->content ?></td>
                    <td>
                        <div style="width: 200px;">
                            <img src="{{ asset('storage/' . $a->image) }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                    </td>
                </tr>
                </tbody>
              </table>

              <a class="btn btn-primary mt-3 d-flex justify-content-center" href="{{ route('about.edit',$a->id) }}">Edit</a>
              @endforeach

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


{!! $about->links() !!}

@endsection