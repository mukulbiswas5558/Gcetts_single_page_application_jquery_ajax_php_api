
<?php 
include('header.php');
?>
<div class="container">
    <h3>Welcome to GCETTS Member .It is single page Application .All operations like insert, view,update ,delete and form validation  are done only  one page without page refresh with javaScript(Jquery), AJAX,PHP Api and Mysql Database </h3>
    <a href="javaScript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New Member<i class="fa fa-plus" aria-hidden="true"></i></a>
    <table class="table table-bordered">
        <thead id="thead" style="background-color:#135361">
            <tr>
                <th>Sr.No</th>
                <th>GCETTS Member Name</th>
                <th>GCETTS MemberEmail</th>
                <th>GCETTS MemberContact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="crudData"></tbody>
    </table>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">CRUD Application Form</h4>
            </div>
            <div class="modal-body">
                <form id="crudAppForm">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                               <label for="name"> GCETTS Member Name <span class="field-required">*</span></label>
                               <input type="text" name="name" id="name" placeholder="GCETTS Member Name" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="form-group">
                               <label for="email">GCETTS Member Email <span class="field-required">*</span></label>
                               <input type="text" name="email" id="email" placeholder="GCETTS Member Email" class="form-control">
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="form-group">
                               <label for="contact">GCETTS Member Contact <span class="field-required">*</span></label>
                               <input type="text" name="contact" id="contact" placeholder="GCETTS Member Contact" class="form-control">
                           </div>
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" name="editId" id="editId" value="" />
                            <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary"><i class="fa fa-spinner fa-spin" id="spinnerLoader" ></i> <span id="buttonLabel">Save</span> </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="crud-app.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




<div class="container text-center">    
  <div class="row">
	<div class="col-sm-7">
    
     
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Mukul Biswas</p>
           <img src="mukul_biswas.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Mukul Biswa is student of Government College of Engineering & Textile Technology, Serampore ,2nd year,CSE department </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Manoj Biswas</p>
           <img src="manoj_biswas.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Mukul Biswa is student of Government College of Engineering & Textile Technology, Serampore ,2nd year,CSE department .</p>
          </div>
        </div>
      </div>     
    </div>

  </div>
</div>
<?php 
include('footer.php');
?>

