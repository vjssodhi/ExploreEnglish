<?php include(APPPATH.'views/backend/include/header.php') ;?>
<?php include(APPPATH.'views/backend/include/main_sidebar.php');?>

<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

<script type="text/javascript">

var dataSet = [
    ["Tiger Nixon",
     "System Architect",
     "Edinburgh",
     "5421",
     "320800",
     "2011-04-25"
    ],
    [
     "Garrett Winters",
     "Accountant",
     "Tokyo",
     "8422",
     "170750",
     "2011-07-25"
    ],
    [
     "Ashton Cox",
     "Junior Technical Author",
     "San Francisco",
     "1562",
     "86000",
     "2009-01-12"
    ]
    ];

   

   $(document).ready(function() {
    $('#example').DataTable( {
                //"bJQueryUI": true, //UI
                "sAjaxSource": "<?php echo site_url('agent/ajax_view_panen');?>", //datasource
                //"sAjaxDataProp": "aData", //menentukan array/json dibaca dari mana
                //"bServerSide": true, //serverside , ini yg bermasalah, kalo di delete beres gak ada error, tapi gak SSP
                "bProcessing": true,

                "aoColumns": [
                        { mData: 'id' } ,
                        { mData: 'vchFirstname' },
                        { mData: 'vchLastname' },
                        { mData: 'intCommission' },
                        { mData: 'vchAddress'},
                        { mData: 'vchEmail' },
                        { mData: 'vchPhone' }

                ]

    } );
   
} );
</script>


<div style="min-height: 347px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Agent List
           
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
<div class="col-md-12">
  <div class="box box-primary col-md-12">
  	<br>

	<div class="">
        <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> Id</th>
                <th> FirstName</th>
                <th> Lastname</th>
                <th> Commission</th>
                <th> Address</th>
                <th> Email</th>
                <th> Phone</th>
               
            </tr>
        </thead>
 
        <tfoot>
            <tr>
             <th> Id</th>
                <th> FirstName</th>
                <th> Lastname</th>
                <th> Commission</th>
                <th> Address</th>
                <th> Email</th>
                <th> Phone</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
       <br>
      </div>
</div>
</div>
</div>
</section>





<?php include(APPPATH.'views/backend/include/footer.php')?>
 </body>
 </html>