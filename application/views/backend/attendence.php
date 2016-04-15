
<?php include(APPPATH.'views/backend/include/header.php') ;

?>

<?php include(APPPATH.'views/backend/include/main_sidebar.php');?>




<style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#dateRangeForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>


       <!-- Main content -->
        <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Attendence Management
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
      <div class="alert alert-danger" id="error" style="display:none;">
  
</div>   
                <form>
             <h3>Select teacher</h3>
                	<select id="teacherid" name="courseteacher">

                    <option value="1">Teacher1</option>
                     <option value="2">Teacher2</option>
                      <option value="3">Teacher3</option>
                       <option value="4">Teacher4</option>
                        <option value="5">Teacher5</option>

                	</select>
    <h3>Select course</h3>
                	<select id="courseid" name="coursetype">
                    <option value="C1">Course1</option>
                     <option value="C2">Course2</option>
                      <option value="C3">Course3</option>
                       <option value="C4">Course4</option>
                        <option value="C5">Course5</option></select>

   <br/>
             

      <p>

       
       <input type="hidden" id="usertype" value="<?php echo $_SESSION['usertype']; ?>"></p>
            <div class="form-group">
        <label class="col-xs-3 control-label">Date</label>
        <div class="col-xs-5 date">
            <div class="input-group input-append date" id="dateRangePicker">
                <input type="text" class="form-control" name="attendencedate" id="attendencedate" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>


                      <a   onclick="checkstudents();" class="btn btn-primary">Next</a>

                </form>	

                  <!--<h3 class="box-title">Quick Example</h3>-->
                </div><!-- /.box-header -->
                <!-- form start -->
                
				
              </div><!-- /.box -->

           


            </div><!--/.col (left) -->
        
        
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<script>
$(document).ready(function() {
    $('#dateRangePicker')
        .datepicker({
            format: 'mm/dd/yyyy',
            startDate: '01/01/2010',
            endDate: '12/30/2020'
        })
        
  
});
</script>

<?php include(APPPATH.'views/backend/include/footer.php')?>
 </body>
 </html>