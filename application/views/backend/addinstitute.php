<?php include(APPPATH.'views\backend\include\header.php') ;?>
<?php include(APPPATH.'views\backend\include\main_sidebar.php');?>
	  	  
	  
	          <!-- Main content -->
        <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Institute Management
           
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
                  <!--<h3 class="box-title">Quick Example</h3>-->
                </div><!-- /.box-header -->
                <!-- form start -->
                
				<?php echo form_open_multipart('admin/addstudent');?>
                  <div class="box-body">
                  <div class="form-group">
                      <label for="exampleInputfirstname">Name of institute</label>
                      <input type="text" placeholder="Name of institute" id="exampleInputfirstname" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputlastname">Id of institute</label>
                      <input type="text" placeholder="Id of institute" id="exampleInputlastname" class="form-control">
                    </div>
                     
                    
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control">
                      <option>Enable/Disable</option>
                      <option>Enable</option>
                      <option>Disable</option>
                      </select>                      
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputmarket">Institute's email-id</label>
                      <input type="email" placeholder="Institute's email-id" id="exampleInputmarket" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputmarket">Institute's alternate email-id</label>
                      <input type="email" placeholder="Institute's alternate email-id" id="exampleInputmarket" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputmarket">Phone number</label>
                      <input type="tel" placeholder="9 to 11 digits contact number" id="exampleInputmarket" class="form-control">                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputmarket">Alternate Phone number 1</label>
                      <input type="tel" placeholder="Additional contact number(Optioal)" id="exampleInputmarket" class="form-control">                    
                    </div>
                     <div class="form-group">
                      <label for="exampleInputmarket">Alternate Phone number 2</label>
                      <input type="tel" placeholder="Additional contact number(Optioal)" id="exampleInputmarket" class="form-control">                    
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputmarket">Zipcode</label>
                      <input type="text" placeholder="Pincode/Zipcode" id="exampleInputmarket" class="form-control">                    
                    </div>
                    
                    
                     <div class="form-group">
                      <label>Country</label>
                      <select class="form-control">
                      <option>Select country</option>
                      <option>Lorem</option>
                      <option>Ipsum</option>
                      </select>                      
                    </div>
                    
                    
                  
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer text-center">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
                </form>
              </div><!-- /.box -->

           


            </div><!--/.col (left) -->
        
        
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


<?php include(APPPATH.'views\backend\include\footer.php')?>
 </body>
 </html>