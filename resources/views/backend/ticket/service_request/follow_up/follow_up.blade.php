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
    {{-- header --}}
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a href="{{route('all.servicerequest')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.calldetails')}}">Call Detail</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.followup')}}">Follow Up</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.dispatch')}}">Dispatch</a></li>
              <li class="breadcrumb-item active"><a href="{{route('all.callclose')}}">Close Call</a></li>

            </ol>
          </nav>
    </div>

    {{-- Body --}}
    <div class="row profile-body">
        <div class="col-md-12 col-xl-12 middle-wrapper">
          <div class="row">
              <div class="card" style="background-color: aliceblue;border:none" >
                  <div class="card-body">
                      <h6 class="card-title" style="color: black;">Account and Contact Info</h6>

                          <form id="myForm" method="POST" action="" class="forms-sample" >
                            @csrf
                            <div  class="row" >
                                <div class="col-sm-3">
                                <div class="mb-4" >
                                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Reference No <span>*</span></label>
                                    <input type="text" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4" >
                                        <label for="exampleInputEmail1" class="form-label" style="color: gray;">ATM ID <span>*</span></label>
                                        <input type="text" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4" >
                                        <label for="exampleInputEmail1" class="form-label" style="color: gray;">Call Date <span>*</span></label>
                                        <input type="date" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                    </div>
                                    </div>
                                <div class="col-sm-3">
                                  <div class="mb-4" >
                                      <label  class="form-label" style="color: gray;">Create By <span>*</span></label>
                                      <select style="color: black;background-color:aliceblue"  class="js-example-basic-single form-select select2-hidden-accessible" name="call_type" data-width="100%" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
                                        <option value="Under Processing" data-select2-id="3">Under Processing</option>
                                        <option value="Finished" data-select2-id="13">Finished</option>
                                    </select>
                                  </div>
                                </div>
                            </div>

                            <div  class="row" >
                                <div class="col-sm-3">
                                <div class="mb-4" >
                                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Model<span>:</span></label>
                                    <input type="text" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4" >
                                        <label for="exampleInputEmail1" class="form-label" style="color: gray;">Site ID <span>*</span></label>
                                        <input type="number" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mb-4" >
                                        <label for="exampleInputEmail1" class="form-label" style="color: gray;">Site <span>*</span></label>
                                        <input type="text" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                    </div>
                                    </div>
                                <div class="col-sm-3">
                                  <div class="mb-4" >
                                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Vendor <span>*</span></label>
                                    <input type="text" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>

                                  </div>
                                </div>
                            </div>

                            <div  class="row" >
                                <div class="col-sm-6">
                                <div class="mb-4" >
                                    <label for="exampleInputEmail1" class="form-label" style="color: gray;">Account <span>*</span></label>
                                    <input type="phone" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4" >
                                        <label for="exampleInputEmail1" class="form-label" style="color: gray;">Contact <span>*</span></label>
                                        <input type="text" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="mb-4" >
                                        <label for="exampleInputEmail1" class="form-label" style="color: gray;">Sub Status <span>*</span></label>
                                        <input type="number" name="phone" class="form-control" style="color: black;background-color:aliceblue" required>
                                    </div>
                                    </div> -->
                            </div>

                            <h6 class="card-title" style="color: black;">Status Info</h6>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Action Taken <span>*</span></label>
                                <textarea type="text" style="background-color: aliceblue; color:black;" name="name" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Sub Status <span>*</span></label>
                                <textarea type="text" style="background-color: aliceblue; color:black;" name="name" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="exampleInputEmail1" class="form-label" style="color: gray;" >Next Activity<span>*</span></label>
                                <textarea type="text" style="background-color: aliceblue; color:black;" name="name" class="form-control" required></textarea>
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
