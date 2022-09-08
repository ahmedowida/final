@extends('cms.parent');

@section('tittle' , 'edit new father')

@section('main-tittle' , 'edit father')
@section('sub-tittle' , 'edit')

@section('styles')

@endsection



@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit data of father </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="father_name">father_name</label>
          <input type="text" class="form-control" id="father_name" name="father_name" value="{{ $fathers->father_name }}" placeholder="">
        </div>
        <div class="form-group">
          <label for="age">age of the father</label>
          <input type="text" class="form-control" id="code" name="code" value="{{ $fathers->age }}" placeholder="">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button onclick="performUpdate({{ $countries->id }})" type="button" class="btn btn-primary">update</button>
      </div>
    </form>
  </div>

@endsection

@section('scripts')

<script>

  function performUpdate(id){
    let formData = new FormData;
   formData.append('father_name' ,document.getElementById('father_name').value );
   formData.append('age' ,document.getElementById('age').value );

   storeRoute('/cms/admin/countries_update/'+id ,formData);

  }

</script>
@endsection





