@extends('admin.admin_dashboard')
@section('admin')
<style>
  .page-breadcrumb .breadcrumb {
    background: aliceblue;
}
.form-select {
    background-color: aliceblue;
  }
  .form-control{
    background-color: aliceblue !important;
    color: black !important;
  }
  .pagination {
    --bs-pagination-disabled-bg: aliceblue;
  }
  .dataTables_length{
    color: black;
  }
  .dataTables_info{
    color: black;
  }
  .dataTables_length select {
    color: black;}
    .page-link{
    background-color: white;
  }
  .page-link:hover{
    background-color: aliceblue;
  }
  label > span {
  color: red;
  margin-left: 3px;
}
input:-webkit-autofill, input:-webkit-autofill:hover, input:-webkit-autofill:focus, input:-webkit-autofill:active {
    -webkit-box-shadow: 0 0 0 30px aliceblue inset;
    -webkit-text-fill-color: black;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="page-content"style="background-color: aliceblue;">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card" style="background-color: aliceblue; border:none;">
  <div class="card-body">
    <h6 class="card-title" style="color: black;">ATM All</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th style="color: gray;">ID</th>
            <th style="color: gray;">Name Company</th>
            <th style="color: gray;">Model</th>
            <th style="color: gray;">Type</th>
            <th style="color: gray;">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $atms as $key => $item)
            <tr>
                <td style="color: black;">{{ $key+1}}</td>
                <td style="color: black;">{{ $item->name}}</td>
                <td style="color: black;">{{ $item->model}}</td>
                <td style="color: black;">{{ $item->type}}</td>
                <td>
                    <a href="{{ route('all.calldetails')}}" class="btn btn-inverse-warning" title="Edit">open</a>

                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>


@endsection
