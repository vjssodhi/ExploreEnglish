<?php include(APPPATH.'views/backend/include/header.php') ;?>
<?php include(APPPATH.'views/backend/include/main_sidebar.php');?>

 <?php 
 
  ?>

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
     






   <?php  //echo "<pre>"; 
  //print_r($studentdata); die;

   
    ?>

        <table>
        	<tr>
        		<th width=300>
        			Student name 
        		</th>
        		<th width=300>
        			Student Id 
        		</th>
        		<th width=300>
        			Actions
        		</th>
        	</tr>

        	<?php
             
        	 if(!empty($studentdata)){ 
           foreach($studentdata as $key=>$stval)
           {
           	$studentname = $stval['vchFirstname'].' '.$stval['vchLastname'];
        		?>
        	<tr>
        		<td><?php echo $studentname ; ?></td>
        		<td><?php echo $stval['vchUniqCode'] ; ?></td>
        		<td><select name="attendencestatus"><option value="">Select</option><option value="P">Present</option><option value="A">Absent</option><option value="L">Leave</option></select></td>
        	</tr>	
  <?php 
           } 
          }else{

          	echo "No data Available"; 
          }
   ?>
        </table>
                
                  <!--<h3 class="box-title">Quick Example</h3>-->
                </div><!-- /.box-header -->
                <!-- form start -->
                
				
              </div><!-- /.box -->

           


            </div><!--/.col (left) -->
        
        
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php include(APPPATH.'views/backend/include/footer.php')?>
 </body>
 </html>