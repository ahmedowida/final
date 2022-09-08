@extends('cms.parent');

@section('tittle' , 'edit new admin')

@section('main-tittle' , 'edit admin')
@section('sub-tittle' , 'edit')

@section('styles')

@endsection



@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">edit admin </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
           <div class="row">
            <div class="form-group col-md-4">
                <label for="first_name">First_name</label>
                <input type="text" class="form-control" id="first_name" value="{{ $admins->user->first_name }}" name="first_name" placeholder="Enter first name">
              </div>
              <div class="form-group col-md-4">
                  <label for="last_name">Last_name</label>
                  <input type="text" class="form-control" id="last_name" value="{{ $admins->user->last_name }}" name="last_name" placeholder="Enter last name">
                </div>
                <div class="form-group col-md-4">
                  <label for="mobile ">Mobile</label>
                  <input type="text" class="form-control" id="mobile" value="{{ $admins->user->mobile }}" name="mobile" placeholder="Enter mobile number">
                </div>
           </div>
             <div class="row">
                <div class="form-group col-md-4">
                    <label for="date_of_birth">Date_of_Birth</label>
                    <input type="date" class="form-control" value="{{ $admins->user->date_of_birth }}" id="date_of_birth" name="date_of_birth" placeholder="">
                  </div> <div class="form-group col-md-4">
                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" value="{{ $admins->email }}" name="email" placeholder="Enter your email">
                  {{-- </div> <div class="form-group">
                    <label for="admin_name col-md-4">password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                  </div> --}}
             </div>



          <div class="row">
            <div class="form-group col-md-4">
                <label for="gender">Gender</label>
                <select class="form-control select2" name="gender" id="gender"  style="width: 100%;">
                    <option selected >{{ $admins->user->gender }}</option>
                  <option value="male">male</option>
                  <option value="female">female</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                  <label for="status">Status</label>
                  <select class="form-control select2" name="status" id="status"  style="width: 100%;">
                    <option selected >{{ $admins->user->status }}</option>
                    <option value="single">single</option>
                    <option value="married">married</option>
                  </select>
                </div>



            <div class="form-group col-md-4">
              <label for="">country</label>
              <select class="form-control select2" name="country_id" style="width: 100%;" id="country_id">
                     {{-- <option selected >{{ $admins->country->country_name }} </option> --}}
                     @foreach ($countries as $country )
                     <option value="{{ $country->id }}"> {{ $country->country_name }} </option>
                     @endforeach
              </select>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="img">img</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="img" name="img">
                <label class="custom-file-label" for="img"  >Choose file</label>
              </div>

            </div>
          </div>




      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button onclick="performUpdate({{ $admins->id }})" type="button" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>

@endsection

@section('scripts')

<script>



  function performUpdate(id){
    let formData = new FormData;
   formData.append('first_name' ,document.getElementById('first_name').value );
   formData.append('last_name' ,document.getElementById('last_name').value );
   formData.append('mobile' ,document.getElementById('mobile').value );
   formData.append('date_of_birth' ,document.getElementById('date_of_birth').value );
   formData.append('email' ,document.getElementById('email').value );
   formData.append('gender' ,document.getElementById('gender').value );
   formData.append('country_id' ,document.getElementById('country_id').value );
   formData.append('status' ,document.getElementById('status').value );
//    formData.append('img' ,document.getElementById('img').files[0]);


  storeRoute('/cms/admin/admins_update/'+id ,formData);


  }




</script>

@endsection





