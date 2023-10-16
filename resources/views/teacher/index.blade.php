<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
     <div class="col-8">
      <h2>Bordered Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>title</th>
        <th>insritute</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>
            <button>Edit</button>
            <button>Delete</button>

    </td>

      </tr>
    </tbody>
  </table>
 </div>
 
 <div class="col-8">
 <h2>Bordered Table</h2>
 <div class="card-header">
    <span id="Addt">Add teacher</span>
    <span id="Updatet">Update teacher</span>

 </div>

  <div class="gorm-group">
    <label for="">name</label>
    <input type="text" class="form-control" placeholder="enter your name">
  </div>
  <div class="gorm-group">
    <label for="">title</label>
    <input type="text" class="form-control" placeholder="enter your name">
  </div>
  <div class="gorm-group">
    <label for="">institute</label>
    <input class="form-control" type="text" placeholder="enter your name">
  </div>
  <button id="addbuton" class="mt-4" type="submit">Add</button>
  <button id="updatebuton" type="submit">update</button>

 </div>
</div>

<script>
    $('#Addt').show();
    $('#addbuton').show();

    $('#Updatet').hide();
    $('#updatebuton').hide();



    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function allData(){
    $.ajax({
        type:"GET",
        dataType:'json',
        url:"/teacher/all",

        success:function(data){
           console.log(data);
        }
    })
}

allData();


</script>


</body>
</html>
