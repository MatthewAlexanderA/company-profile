@extends('admin.layout')

@section('config')
active
@endsection
@section('title')
Config
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
                  <th>Image</th>
                  <th>Metadata</th>
                  <th>WhatsApp</th>
                  <th>Footer Image</th>
                  <th>Footer Content</th>
                </tr>
                </thead>
                @foreach ($config as $c)
                <tbody>
                <tr>
                    <td>{{ $c->title }}</td>
                    <td>
                        <div style="width: 100px;">
                            <img src="{{ asset('storage/' . $c->image) }}" alt="No Image" class="img-fluid mt-3">
                        </div>
                    </td>
                    <td><?php echo $c->metadata ?></td>
                    <td>{{ $c->wa }}</td>
                    <td>
                      <div style="width: 100px;">
                          <img src="{{ asset('storage/' . $c->footer_img) }}" alt="No Image" class="img-fluid mt-3">
                      </div>
                  </td>
                    <td>{{ $c->footer_content }}</td>
                </tr>
                </tbody>
              </table>

              <a class="btn btn-primary mt-3 d-flex justify-content-center" href="{{ route('config.edit',$c->id) }}">Edit</a>
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


{!! $config->links() !!}

@endsection