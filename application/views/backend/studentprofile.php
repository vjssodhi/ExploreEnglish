<?php include(APPPATH.'views\backend\include\header.php') ;?>
<?php include(APPPATH.'views\backend\include\main_sidebar.php');?>

<div class="content-wrapper" style="min-height: 1096px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Student Profile
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
          
          <div class="col-md-10">

              <!-- Profile Image -->
              <div class="box box-primary clearfix">
            <div class="col-md-2">

              <!-- Profile Image -->
          
                <div class="box-body box-profile">
                  <img alt="User profile picture" src="<?php echo base_url();?>assets/dist/img/user4-128x128.jpg" class="profile-user-img img-responsive">
                 </div><!-- /.box-body -->
                  </div>
                <div class="col-md-9">
                <h3>Nina Mcintire</h3>
                <h4>Software Manager</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
        

              <!-- About Me Box -->
            <div class="description clearfix col-md-12">
             
                <div class="box-body  col-md-offset-2">
                  <p><strong><i class="fa fa-book margin-r-5"></i>  Education :</strong>
                  
                    B.S. in Computer Science from the University of Tennessee at Knoxville
                  </p>

                  <hr>

                  <p> <strong><i class="fa fa-map-marker margin-r-5"></i> Location :</strong>
                 Malibu, California</p>

                  <hr>

                 <p> <strong><i class="fa fa-pencil margin-r-5"></i> Skills :</strong>
                  
                    <span class="label label-danger">UI Design</span>
                    <span class="label label-success">Coding</span>
                    <span class="label label-info">Javascript</span>
                    <span class="label label-warning">PHP</span>
                    <span class="label label-primary">Node.js</span>
                  </p>

                  <hr>

                  <p> <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes :</strong>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div><!-- /.box-body -->
            
            </div>
       
          </div><!-- /.row -->
</div>
</div>
        </section><!-- /.content -->
      </div>

<?php include(APPPATH.'views\backend\include\footer.php')?>
 </body>
 </html>