<?php include(APPPATH.'views\backend\include\header.php') ;?>
<?php include(APPPATH.'views\backend\include\main_sidebar.php');?>
	  	  
	  
	          <!-- Main content -->
        <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Add Agent
           
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
                     
                    <div class="form-group">
                      <label for="exampleInputdob">Email id</label>
                      <input type="email" placeholder="Email id" id="exampleInputdob" class="form-control">
                    </div>
                    
                       <div class="form-group">
                      <label for="exampleInputdob">Phone number</label>
                      <input type="email" placeholder="Phone number" id="exampleInputdob" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputdob">Person image</label>
                      <input type="file" name="userfile" placeholder="Browse">
                    </div>
                    
          
                    

                   <div class="form-group">
                    <label>Date range:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation">
                    </div><!-- /.input group -->
                  </div>

                    
                      
                    <div class="form-group">
                      <label for="exampleInputtest">Person in charge</label>
                      <input type="text" placeholder="Person incharge test" id="exampleInputtest" class="form-control">
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
<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>
 </body>
 </html>