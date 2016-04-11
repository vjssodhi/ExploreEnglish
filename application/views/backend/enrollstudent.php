<?php include(APPPATH.'views\backend\include\header.php') ;?>
<?php include(APPPATH.'views\backend\include\main_sidebar.php');?>
	  	  
	  
	          <!-- Main content -->
        <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Enroll Student
           
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
                  <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half space">
                      <label for="exampleInputfirstname">First name</label>
                      <input type="text" placeholder="First Name" id="exampleInputfirstname" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half">
                      <label for="exampleInputlastname">Last name</label>
                      <input type="text" placeholder="Last Name" id="exampleInputlastname" class="form-control">
                    </div>
                     <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half space">
                      <label for="exampleInputnickname">Nick name</label>
                      <input type="text" placeholder="Nick Name" id="exampleInputnickname" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half">
                      <label for="exampleInputdob">D.O.B</label>
                      <input type="text" placeholder="D.O.B" id="exampleInputdob" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Visa category</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    
                    <div class="form-group">
                    <label>Number of weeks:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" id="reservation" class="form-control pull-right">
                    </div>
                  </div>
                    <div class="form-group">
                      <label>Courses : &nbsp;</label>
                      <input type="checkbox"> Ilets &nbsp; &nbsp;
                      <input type="checkbox"> Lorem &nbsp; &nbsp;
                      <input type="checkbox"> Ipsum &nbsp; &nbsp;
                      <input type="checkbox"> Dollor &nbsp; &nbsp;
                      <input type="checkbox"> Ut sed &nbsp; &nbsp;
                      <input type="checkbox"> Expecto
       				</div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Study plans</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    
                      <div class="form-group">
                      <label>Placement test : &nbsp;</label>
                      <input type="radio" name="test" value="yes">Yes
                      <input type="radio" name="test" value="no">No                            
                    </div>
                    <div class="form-group">
                      <label for="exampleInputtest">proficiency test</label>
                      <input type="text" placeholder="proficiency test" id="exampleInputtest" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputprice">Price</label>
                      <input type="text" placeholder="Price" id="exampleInputprice" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputmarket">Marketing specialist</label>
                      <input type="text" placeholder="Marketing specialist" id="exampleInputmarket" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputcode">Unique code</label>
                      <input type="text" placeholder="Unique code" id="exampleInputcode" class="form-control">
                    </div>
                    
                                
                    
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half space">
                      <label>Payment Staus</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half">
                      <label>Payment plan</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer text-center">
                    <button class="btn btn-primary" type="submit">Add</button>
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