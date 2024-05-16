@extends('admin.admin_dashboard')
@section('admin')
<style>
    label > span {
  color: red;
  margin-left: 3px;
}
input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, input:-webkit-autofill:active {
    -webkit-box-shadow: 0 0 0 30px aliceblue inset;
    -webkit-text-fill-color: black;
}

</style>
<div class="page-content" style="background-color: aliceblue;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card" style="background-color: aliceblue;border:none" >
                <div class="card-body">
                    <h6 class="card-title" style="color: black;">Edit Leads</h6>

                        <form id="myForm" method="POST" action="{{ route('update.leads',$leads->id)}}" class="forms-sample" >
                          @csrf
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Company Name <span>*</span></label>
                                <input type="text" style="background-color: aliceblue; color:black;" name="name" class="form-control" value="{{ $leads->name }}" required>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;"  >Email <span>*</span></label>
                                <input type="text" style="background-color: aliceblue; color:black;" name="email" class="form-control" value="{{ $leads->email }}" required>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Phone Number <span>*</span></label>
                                <input type="text" style="background-color: aliceblue; color:black;" name="phone" class="form-control" value="{{ $leads->phone }}" required>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Address <span>*</span></label>
                                <input type="text" style="background-color: aliceblue; color:black;" name="address" class="form-control" value="{{ $leads->address }}" required>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >City <span>*</span></label>
                                <input type="text" style="background-color: aliceblue; color:black;" name="city" class="form-control" value="{{ $leads->city }}" required>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label"style="color: gray;"  >Services <span>*</span></label>
                                <select name="services_id" style="background-color: aliceblue; color:black;" class="form-control" required>
                                    <option selected="" disabled="">Select Services</option>
                                    @foreach ($services as $service )
                                      <option value="{{ $service->id }}">{{ $service->name }}</option>
                                      @endforeach
                                  </select>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Designation <span>*</span></label>
                                <input type="text" style="background-color: aliceblue; color:black;" name="name" class="form-control" value="{{ $leads->name }}" required>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Sold by <span>*</span></label>
                                <select name="users_id" style="background-color: aliceblue; color:black;" class="form-control" required>
                                    <option selected="" disabled="">Select User</option>
                                    @foreach ($users as $user )
                                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                                      @endforeach
                                  </select>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Description <span>*</span></label>
                                <input type="text" style="background-color: aliceblue; color:black;" name="description" class="form-control" value="{{ $leads->description }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Save</button>
                           
                        </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
