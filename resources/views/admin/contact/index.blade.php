@extends('admin.layout')

@section('edit')
active
@endsection
@section('contact')
active
@endsection
@section('title')
Contact Us
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
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Website</th>
                </tr>
                </thead>
                @foreach ($contact as $c)
                <tbody>
                <tr>
                    <td>{{ $c->alamat }}</td>
                    <td>{{ $c->telp }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->web }}</td>
                </tr>
                </tbody>
              </table>

              <a class="btn btn-primary mt-3 d-flex justify-content-center" href="{{ route('contact.edit',$c->id) }}">Edit</a>
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


{!! $contact->links() !!}

@endsection