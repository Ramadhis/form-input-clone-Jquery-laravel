@extends('mylayout.app')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Add Skor</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Add Skor</h6>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('insert-skor') }}">
        @csrf
        <div class="col-md-12 fieldGroup">
          <div class="row cloneForm my-4">
            <div class="col-md-5">
              <div class="form-group">
                <select class="form-control klubSelect" name="klub1[]" id="exampleFormControlSelect1" required>
                  <option>-- pilih klub --</option>
                  @foreach($klub as $k)
                  <option value="{{$k->id.'bb'}}">{{$k->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <div class="col-md-5 mx-0 float-right">
                  <input type="text" class="form-control" placeholder="skor" name="skor1[]">
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <center>
                <h3>
                  VS
                </h3>
                <div class="innerDel">

                </div>
                <a href="javascript:void(0)" class="btn btn-danger btn-sm delete">Delete Section</a>
              </center>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <select class="form-control" name="klub2[]" id="exampleFormControlSelect1" required>
                  <option>-- pilih klub --</option>
                  @foreach($klub as $k)
                  <option value="{{$k->id.'aa'}}">{{$k->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <div class="col-md-5 mx-0 float-left">
                  <input type="text" class="form-control" placeholder="skor" name="skor2[]">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 my-5">
          <a href="javascript:void(0)" class="btn btn-success mb-2 addMore">Add</a>
          <button type="submit" class="btn btn-success mb-2 float-right">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
let cloneTemplate = $('.cloneForm').clone(true);
let formAppend = $('.fieldGroup');
let countForm = 1;
let arrKlub = () => {
  return $.ajax({
    url: `{{ route('klub_data') }}`,
    type: "get",
    dataType: 'json',
    success: function(data) {
      alert("success");
      arrKlub = data;
      return arrKlub;
    },
    error: function(data) {
      console.log('Error:', data);
    }
  })
}

console.log(arrKlub());

$(".addMore").click(function() {
  countForm += 1;
  let newForm = cloneTemplate.clone(true);
  formAppend.append(newForm);
  return false;
});

$(document).on('click', '.delete', function() {
  if (countForm === 1) {
    alert("cant delete last form");
  } else {
    countForm -= 1;
    $(this).closest(".cloneForm").remove();
  }

});
</script>
<!-- End of Main Content -->
@endsection