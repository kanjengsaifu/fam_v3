<!-- BEGIN PAGE BREADCRUMB --> 


<style type="text/css">
 
  
       table#table_gridCategory th:nth-child(2){
        display: none;
    } 
    table#table_gridCategory td:nth-child(2){
        display: none;
    }

    </style>
<!-- END PAGE BREADCRUMB -->
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<!-- KONTEN DI SINI YA -->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit  bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase"><?php echo $menu_header; ?></span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="fullscreen">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
               <!--  <ul class="nav nav-pills">
                    <li class="linav active" id="linav1">
                        <a href="#tab_2_1" data-toggle="tab" id="navitab_2_1" class="anavitab">
                            Data Item Category </a>
                    </li>
                    <li class="linav" id="linav2">
                        <a href="#tab_2_2" data-toggle="tab" id="navitab_2_2" class="anavitab">
                            Form Data Item Category</a>
                    </li>

                </ul> -->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab_2_1">
                        <div class="scroller" style="height:400px; ">
                            <div class="row">
                                <div class="col-md-12">
                                    <button id="id_Reload" style="display: none;"></button>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-8">
                                    <a class="btn btn-sm btn-primary" href="#" id="btnAdd" data-toggle="modal" data-target="#mdl_Update">Add Master Division</a>
                                     <!-- <button class="btn btn-sm btn-default">Add Item Category</button> -->
                                 </div>
                                 <div class="col-md-2">
                                        <select id="statustype" name="statustype" onchange="status(this.value)" class="form-control">
                                            <option value="%">--All--</option>
                                            <option value="1">Active</option>
                                            <option value="0">Non-Active</option>
                                        </select>
                                    </div>
                                 <div class="col-md-2">
                                        <select id="cat_itemclass" name="cat_itemclass" onchange="search(this.value)" class="form-control">
                                            <option value="%">--All--</option>
                                            <option value="1">Category Code</option>
                                            <option value="2">Item Category Name</option>
                                        </select>
                                    </div>



                                <div class="col-md-12">

                                    <table class="table table-striped table-bordered table-hover text_kanan" id="table_gridCategory">
                                        <thead>
                                            <tr>
                                            <th>
                                                NO
                                            </th>     
                                             <th>
                                                DivisionID
                                            </th> 
                                            <th>
                                                Branch ID
                                            </th>                                     
                                            <th>
                                                Division Code
                                            </th>
                                               <th>
                                                Division Name
                                            </th>
                                            
                                             <th>
                                                Division Alias
                                            </th>

                                             <th>
                                                Action
                                            </th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                        <tfoot>


                                        </tfoot>
                                    </table>
                                </div>
                                <!-- end col-12 -->
                            </div>
                            <!-- END ROW-->
                        </div>
                    </div>
                    </div>    
                </div>

            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>


<!-- END PAGE CONTENT-->

<!-- Modal UPDATE-->
<div class="modal fade draggable-modal" id="mdl_Update" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">                
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

        <input type="hidden" class="form-control" id="txtDivisionID" >
         <div class="validator-form form-horizontal">

        <div class="form-group">
                        <label class="control-label col-md-3">Branch
                                       
                            </label>
                                    <div class="col-md-7">
                                        <select id="id_BranchID" required="required" class="form-control" name="BranchID">
                                                <option value="">--Pilih--</option>
                                                <?php foreach ($branch as $value) { ?>

                                                    <option value="<?php echo $value->BranchID ?>"><?php echo $value->BranchName ?></option>
                                                <?php } ?>
                                                
                                            </select>
                                    </div>
                                </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Division Code</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="txtDivisionCode">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Division Name</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="txtDivisionName">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Division Alias</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="txtDivisionAlias">
            </div>
        </div>
 
         <div class="form-group status">
            <label class="control-label col-sm-3">Status</label>
            <div class="col-sm-3">
                <select id="statustypeAdd" name="statustypeAdd" onchange="statusAdd(this.value)" class="form-control">
                <option value="1">Active</option>
                <option value="0">Non-Active</option>
            </select>
            </div>
        </div>          
    </div>

        <div class="modal-footer">
            <div class="btnSC">
              <button type="button" class="btn btn-success save" onclick="clickUpdate()">Save</button>
              <button type="button" class="btn btn-success update" onclick="clickUpdate()">Update</button>
              <button type="button" class="btn btn-warning close_" data-dismiss="modal">Close</button>                
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<?php $this->load->view('app.min.inc.php'); ?>

<script>
    var dataTable;
    var iStatusAdd='1';
    var iStatus='%';
    var iSearch='%';

     $("#btnAdd").click(function(){
     $('#mdl_Update').find('.modal-title').text('Add');
     $("#txtDivisionID").val("Generate");
     $("#txtBranchID").val("");
     $("#txtDivisionCode").val("");
     $("#txtDivisionName").val("");
     $("#txtDivisionAlias").val("");

     
     document.getElementById("txtDivisionCode").readOnly = false;
     document.getElementById("txtDivisionName").readOnly = false;
     document.getElementById("txtDivisionAlias").readOnly = false;

    $(".btnSC").show();
    $(".btnSC .save").show();
    $(".btnSC .update").hide();
    $(".btnSC .close_").show();
    $(".status").show();

    });
 function statusAdd(e){
        iStatusAdd=e;
    }
    function search(e){
        iSearch=e;
    }
    function status(e){
        iStatus=e;
        $('#table_gridCategory').DataTable().ajax.reload();
    }
    $('#table_gridCategory').on('click', '#btnAktiv', function () {
        var iclosestRow = $(this).closest('tr');
        var idata = dataTable.row(iclosestRow).data();

        var i_clsUpdate={
            DivisionID:idata[1],
            Status: 1
        }
        $.ajax({
          type: "POST",
          cache:false,
          dataType: "JSON",
      url: "<?php echo base_url("/master_division/ajax_UpdateStatusCategory"); ?>", // json datasource
      data: { sTbl: i_clsUpdate },
      success: function (e) {
        // console.log(e);
        if(e.msgType==true){
            // alert(e.msgTitle);
            $('#mdl_Update').modal('hide');            
            $('#table_gridCategory').DataTable().ajax.reload();
        }else{
          alert(e.msgTitle);
      }
  }
});
    });

    $('#table_gridCategory').on('click', '#btnDeactivate', function () {
        var iclosestRow = $(this).closest('tr');
        var idata = dataTable.row(iclosestRow).data();

        var i_clsUpdate={
            DivisionID:idata[1],
            Status: 0
        }
        $.ajax({
          type: "POST",
          cache:false,
          dataType: "JSON",
      url: "<?php echo base_url("/master_division/ajax_UpdateStatusCategory"); ?>", // json datasource
      data: { sTbl: i_clsUpdate },
      success: function (e) {
        // console.log(e);
        if(e.msgType==true){
            // alert(e.msgTitle);
            $('#mdl_Update').modal('hide');            
            $('#table_gridCategory').DataTable().ajax.reload();
        }else{
          alert(e.msgTitle);
      }
  }
});
    });

   function clickUpdate(){
    var i_clsUpdate={
        DivisionID: $("#txtDivisionID").val(),
        BranchID: $("#txtBranchID").val(),
        DivisionCode: $("#txtDivisionCode").val(),
        DivisionName: $("#txtDivisionName").val(),
        DivisionAlias: $("#txtDivisionAlias").val(),
        Status: iStatusAdd
    }
    console.log(i_clsUpdate)
    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php echo base_url("/master_division/ajax_UpdateCategory"); ?>", // json datasource
      data: { sTbl: i_clsUpdate },
      success: function (e) {
        console.log(e);
        if(e.msgType==true){
            alert(e.msgTitle);
            $('#mdl_Update').modal('hide');            
            $('#table_gridCategory').DataTable().ajax.reload();
        }else{
      alert(e.msgTitle);
  }
}
});

   }

 $('#table_gridCategory').on('click', '#btnDetail', function () {
    $('#mdl_Update').find('.modal-title').text('Detail');

    var iclosestRow = $(this).closest('tr');
    var idata = dataTable.row(iclosestRow).data();
    // console.log(idata);
    $("#txtDivisionID").val(idata[1]);
    $("#txtBranchID").val(idata[2]);
    $("#txtDivisionCode").val(idata[3]);
    $("#txtDivisionName").val(idata[4]);
    $("#txtDivisionAlias").val(idata[5]);



    document.getElementById("txtDivisionCode").readOnly = true;
    document.getElementById("txtDivisionName").readOnly = true;
    document.getElementById("txtDivisionAlias").readOnly = true;

    

    $(".btnSC").hide();
    $(".status").hide();

  });
  $('#table_gridCategory').on('click', '#btnUpdate', function () {
    $('#mdl_Update').find('.modal-title').text('Update');

    var iclosestRow = $(this).closest('tr');
    var idata = dataTable.row(iclosestRow).data();
    // console.log(idata);
    $("#txtDivisionID").val(idata[1]);
    $("#txtBranchID").val(idata[2]);
    $("#txtDivisionCode").val(idata[3]);
    $("#txtDivisionName").val(idata[4]);
    $("#txtDivisionAlias").val(idata[5]);


   
    document.getElementById("txtDivisionCode").readOnly = false;
    document.getElementById("txtDivisionName").readOnly = false;
    document.getElementById("txtDivisionAlias").readOnly = false;

    
   $(".btnSC").show();
    $(".btnSC .save").hide();
    $(".btnSC .update").show();
    $(".btnSC .close_").show();
    $(".status").hide();
  });
     jQuery(document).ready(function () {
        dataTable = $('#table_gridCategory').DataTable({
             "columnDefs": [
                  {"targets":[ -1 ],"searchable":false,"orderable": false},
                  {"targets":[ 1 ],"visible":false,"searchable":false,"orderable": false},
                  {"targets":[ 4 ],"searchable":false,"orderable": false},
              ],
            "lengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "All"] // change per page values here
            ],
//                // set the initial value
            "pageLength": 5,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url("/master_division/get_server_side"); ?>", // json datasource
                type: "post", // method  , by default get
                  data:function(z){
                    z.sStatus=iStatus;
                    z.sSearch=iSearch;
                  },
             
                error: function () {  // error handling
                    $(".table_gridCategory-error").html("");
                    // $("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $('#table_gridCategory tbody').html('<tbody class="employee-grid-error"><tr><th colspan="4">No data found in the server</th></tr></tbody>');
                    $("#table_gridCategory_processing").css("display", "none");

                }
            }
        });


    });

    // jQuery(document).ready(function () {
    //     TableManaged.init();
    // });
    btnStart();
    $("#id_userName").focus();
    $("#id_showPassword").click(function () {
        if ($('#id_chckshowPassword').is(':checked')) {
            $('.clsPasswd').attr('type', 'text');
        } else {
            $('.clsPasswd').attr('type', 'password');
        }
    });
    $("#id_btnSimpan").click(function () {
        $('#idTmpAksiBtn').val('1');
        var passwd = $('#id_kataKunci').val();
        var confPasswd = $('#id_confKataKunci').val();
        if (passwd == confPasswd) {
            return true;
        } else {
            alert("Password dan konfirmasi password tidak sama.");
            $("#id_password").focus();
            return false;
        }
    });

    $('#id_btnBatal').click(function () {
        btnStart();
    });

    $("#id_btnSimpan").click(function () {
        $('#idTmpAksiBtn').val('1');
        bootbox.confirm("Apakah anda yakin menyimpan data ini?", function (o) {
            if (o == true) {
                $('#idFormUser').submit();
            }
        });

    });
    $("#id_btnUbah").click(function () {
        $('#idTmpAksiBtn').val('2');
        bootbox.confirm("Apakah anda yakin mengubah data ini?", function (o) {
            if (o == true) {
                $('#idFormUser').submit();
            }
        });

    });
    
    $("#id_btnHapus").click(function () {
        $('#idTmpAksiBtn').val('3');
        bootbox.confirm("Apakah anda yakin menghapus data ini?", function (o) {
            if (o == true) {
                $('#idFormUser').submit();
            }
        });

    });

</script>


<!-- END JAVASCRIPTS