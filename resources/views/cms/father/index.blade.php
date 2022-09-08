@extends('cms.parent');

@section('tittle' , 'father')

@section('main-tittle' , 'index father')
@section('sub-tittle' , 'age of father')

@section('styles')

@endsection

@section('content')

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <a href="{{ route('fathers.create') }}" type="submit" class="btn btn-success">create new name father</a>


          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>father_name</th>
                <th>created date</th>
                <th>setting</th>

              </tr>
            </thead>
            <tbody>

                @foreach ( $fathers as $father )

                <tr>
                    <td>{{ $father->id }}</td>
                    <td>{{ $father->name }}</td>
                    <td>{{ $father->age }}</td>
                    <td>{{ $father->created_at }}</td>
                    <td>
                        <div class="btn-group">
                          <a href="{{ route('fathers.edit' , $father->id) }}" type="button" class="btn btn-info">edit</a>
                          <a href="#" onclick="confirmDelete({{ $father->id}},this)" type="button" class="btn btn-danger">Delete</a>
                          <button type="button" class="btn btn-success">show</button>
                        </div>
                      </td>
                  </tr>

                @endforeach

            </tbody>
          </table>
        </div>

        {{ $fathers->links() }}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>


@endsection

@section('scripts')

<script>
    function confirmDelete(id , referance){
      let url = '/cms/admin/fathers/'+id;
      confirmDestroy(url , referance);

    }
</script>

@endsection

