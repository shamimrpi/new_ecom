@extends('layouts.admin')
@section('main_mody')
    <div class="container-fluid m-10">
              
   
                    <!-- column -->
                    <br />
                    <br/>
                  
                        <div class="card mycard" style="">
                            <div class="card-body">
                                <form class="form" action="{{route('admin.profile.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                  <div class="container"> 
                                    <div class="row">
                                        <div class="col-md-4 my-row">
                                            <label class="font-weight-bold">First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{Auth::user()->first_name}}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="font-weight-bold">First Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" >
                                        </div>
                                        <div class="col-md-4">
                                            <label class="font-weight-bold">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" disabled> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="font-weight-bold">Date Of Birth</label>
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="font-weight-bold">Image</label>
                                            <input type="file" id="imgload" class="form-control" name="image">
                                        </div>
                                        <div class="col-md-4">
                                            <img id="showImage" class="form-control"  style="height: 150px;width: 170px;border: 1px solid #eee">
                                        </div>
                                        <button class="btn btn-info submit-btn" type="submit" value="Update">Update</button>
                                    </div>
                                  </div>
                                
                                </form>
                            </div>
                        </div>
                  
              
          
        </div>
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
     // image show javascript
     $("#imgload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
  });
</script>
@endsection
