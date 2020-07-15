<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <script>
    $(document).ready(function() {
      getpurpose("1");
      getdept("2");
      getfaculty("3");
      $("#save").click(function(e) {
        e.preventDefault();
        var strdd = "savedet";
        $.ajax({
          type: "post",
          url: "savedd.php?str=" + strdd,
          dataType: "json",
          data: $("#ddform").serialize(),
          success: function(data) {
            alert(data);
          }
        });
      });
    });

    function getpurpose(str) {
      $.ajax({
        type: 'post',
        url: 'savedd.php?str=' + str,
        success: function(data) {
          $("#purpose").html(data);
        }
      });
    }

    function getdept(str) {
      $.ajax({
        type: 'post',
        url: 'savedd.php?str=' + str,
        success: function(data) {
          $("#dept").html(data);
          $("#dept1").html(data);
        }
      });
    }

    function getfaculty(str) {
      $.ajax({
        type: 'post',
        url: 'savedd.php?str=' + str,
        success: function(data) {
          $("#faculty").html(data);
          $("#faculty2").html(data);
        }
      });
    }

    function addpurphtml(string) {
      $('#purpose').prop('disabled', 'disabled');
      $.ajax({
        url: 'savedd.php?str=' + string,
        type: 'post',
        success: function(data) {
          $('.add').append(data);
          $('#addpurp').hide();
        }
      });
    }

    // function savepurp(string) {
    //   var purp = $('#purpsave').value();
    //   alert();
    // $.ajax({
    //   url: 'savedd.php?str='+string,
    //   type: 'post',
    //   success: function(data){
    //     $('.add').hide();
    //   }
    // });
    // }

    $(document).ready(function() {
      $('#show').click(function(e) {
        e.preventDefault();
        $("#myModal").modal('show');
        $.ajax({
          url: "savedd.php?str=report",
          success: function(data) {
            $("#myModal").modal("show");
            $(".text").html(data);
          }
        });
      });
    });

    function filterdep(str) {
      var dep = $("#dept1 option:selected").text();
      // alert(dep);
      // var fac = $("#faculty2 option:selected").text();
      $.ajax({
        type: "post",
        url: "savedd.php?str=" + str,
        data: "depart=" + dep,
        success: function(temp) {
          //alert(temp);
          $(".text").html(temp);
        }
      });
    }

    function filterfac(str) {
      var fac = $("#faculty2 option:selected").text();
      // alert(dep);
      // var fac = $("#faculty2 option:selected").text();
      $.ajax({
        type: "post",
        url: "savedd.php?str=" + str,
        data: "faculty=" + fac,
        success: function(temp) {
          //alert(temp);
          $(".text").html(temp);
        }
      });
    }

    $(document).ready(function() {

      load_data();

      function load_data(query) {
        $.ajax({
          url: "savedd.php?str=searchfil",
          method: "POST",
          data: {
            query: query
          },
          success: function(data) {
            $('.text').html(data);
            $('#regno1').empty();
          }
        });
      }
      $('#regno1').keyup(function() {
        var search = $(this).val();
        if (search != '') {
          load_data(search);
        } else {
          load_data();
        }
      });
    });
  </script>
  <title>DD-Form</title>
</head>

<body>
  <div class="container">
    <div class="heading">
      <h4>DD-Form</h4>
    </div>
    <div class="ddform">
      <form id="ddform">
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="ddno">DD Number</label>
            <input type="text" class="form-control" id="ddno" name="ddno" placeholder="123...">
          </div>
          <div class="col-md-3"></div>
          <div class="form-group col-md-3">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="yyyy-mm-dd">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="purpose">Purpose</label>
            <select id="purpose" class="form-control" name="selectpurpose">
            </select>
          </div>
          <div class="form-group col-md-1">
            <button class="btn btn-primary" type="button" id="addpurp" onclick=addpurphtml('add')>+</button>
          </div>
          <div class="form-group col-md-1">
            <label for="ammount">Ammount</label>
            <input type="text" class="form-control" id="amount" name="amount" placeholder="123...">
          </div>
          <div class="form-group col-md-3">
            <label for="bank">Bank</label>
            <input type="text" class="form-control" id="bank" name="bank" placeholder="Bankname">
          </div>
        </div>
        <div class="add"></div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
          <div class="form-group col-md-4">
            <label for="regno">Registration Number</label>
            <input type="text" class="form-control" id="regno" name="regno" placeholder="RAxxxxx">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="dept">Department</label>
            <select id="dept" class="form-control" name="selectdept">
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="faculty">Faculty</label>
            <select id="faculty" class="form-control" name="selectfac">
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="year">Pass Out</label>
            <select id="year" class="form-control" name="selectyear">
              <option selected>Yes</option>
              <option>No</option>
            </select>
          </div>
        </div>

        <button type="button" class="btn btn-primary" id="save">Save</button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" id='show'>Show</button>
      </form>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="regno1">Registration Number</label>
                  <input type="text" class="form-control" id="regno1" name="regno1" placeholder="RAxxxxx">
                </div>
                <div class="form-group col-md-4">
                  <label for="dept">Department</label>
                  <select id="dept1" class="form-control" name="selectdept1" onchange=filterdep("fildep")>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="faculty">Faculty</label>
                  <select id="faculty2" class="form-control" name="selectfac2" onchange=filterfac("filfac")>
                  </select>
                </div>
                <div class="text"></div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>