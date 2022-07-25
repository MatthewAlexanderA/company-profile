@extends('admin.layout')

@section('edit')
active
@endsection
@section('why')
active
@endsection
@section('title')
Why Us
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
            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                </tr>
                </thead>
                @foreach ($why as $w)
                <tbody>
                <tr>
                    <td>{{ $w->title }}</td>
                    <td><?php echo $w->content ?></td>
                </tr>
                </tbody>
              </table>

              <a class="btn btn-primary mt-3 d-flex justify-content-center" href="{{ route('why.edit',$w->id) }}">Edit</a>
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


{!! $why->links() !!}

@endsection