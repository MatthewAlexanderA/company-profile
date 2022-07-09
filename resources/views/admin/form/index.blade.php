@extends('admin.layout')

@section('form')
active
@endsection
@section('title')
Forms
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
                  <th>Name</th>
                  <th>Subject</th>
                  <th>Content</th>
                </tr>
                </thead>
                @foreach ($form as $f)
                <tbody>
                <tr>
                    <td>{{ $f->name }}</td>
                    <td>{{ $f->subject }}</td>
                    <td><?php echo $f->content ?></td>
                </tr>
                </tbody>
              </table>
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


{!! $form->links() !!}

@endsection