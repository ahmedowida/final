@extends('cms.parent');

@section('tittle' , 'create name father')

@section('main-tittle' , 'create age father')
@section('sub-tittle' , 'create')

@section('styles')

@endsection



@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create name father  </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">


        <div class="form-group">
          <label for="father_name">father_name</label>
          <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter fathern ame ">
        </div>
        <div class="form-group">
          <label for="age">father_age</label>
          <input type="number" class="form-control" id="age" name="age" placeholder="Enter father age ">
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <a href="{{ route('fathers.index') }}" type="submit" class="btn btn-success">Index page</a>
        <button onclick="performStore() , this" type="button" class="btn btn-primary">Store</button>
      </div>
    </form>
  </div>

@endsection

@section('scripts')

<script>
  function performStore(){
    let formData = new FormData;
   formData.append('father_name' ,document.getElementById('father_name').value );
   formData.append('age' ,document.getElementById('age').value );



   store('/cms/admin/fathers',formData);


  }

</script>

@endsection





