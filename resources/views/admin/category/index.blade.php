@extends('admin.layout')

@section('menu')
active
@endsection
@section('category')
active
@endsection
@section('title')
Category
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
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create</a>
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
                  <th>Type</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
                </thead>
                @foreach ($category as $c)
                <tbody>
                <tr>
                    <td>{{ ucfirst($c->type) }}</td>
                    <td>{{ $c->category }}</td>

                    <td><form action="{{ route('category.destroy',$c->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('category.edit',$c->id) }}">Edit</a>
        
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


{!! $category->links() !!}

@endsection