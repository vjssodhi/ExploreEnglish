//adding a new agent start
function addagentfnction()
{
var agentfirstname = $('#agentfirstname').val();
var agentlastname = $('#agentlastname').val();
var agentcommission = $('#commissionI').val();
var agentemail = $('#agentemail').val();
var agentphone = $('#agentphone').val();
var agentaddress = $('#agentaddress').val();
var agentstatus  = $('#instStatusS').val();
if(agentfirstname == '')
	{   $('#error').show();
		$('#error').text('please enter Firstname');
	//$('<p>Please enter a Username.</p>').appendTo('#error');
	 $('#error').delay(1000).fadeOut();
		return false;
		
	}else if(agentlastname == ''){
		$('#error').show();
		$('#error').text('Please enter Lastname.');
        $('#error').delay(1000).fadeOut();
	
		return false;			
	}
	else if(agentcommission == ''){
		$('#error').show();
		$('#error').text('Please add agent commission.');
        $('#error').delay(1000).fadeOut();
	
		return false;			
	}else if(agentemail == ''){
		$('#error').show();
		$('#error').text('Please add an Email.');
        $('#error').delay(1000).fadeOut();
	
		return false;			
	}else if(agentphone == ''){
		$('#error').show();
		$('#error').text('Please add a 10 digit Phone number.');
        $('#error').delay(1000).fadeOut();
	
		return false;			
	}else if(agentaddress == ''){
		$('#error').show();
		$('#error').text('Please add a Phone number.');
        $('#error').delay(1000).fadeOut();
	
		return false;			
	}else if(agentstatus == ''){
		$('#error').show();
		$('#error').text('Please select a status.');
        $('#error').delay(1000).fadeOut();
	
		return false;			
	}else{
    
        var email = agentemail;
		$.ajax({
        url: 'getagentdata',
        data: ({'email': email}),
        dataType: 'json', 
        type: "post",
        success: function(resp){
        	if(resp==1)
        	{
        	$('#error').show();
		$('#error').text('The Email already exists');
        $('#error').delay(3000).fadeOut();	
        return false ;
        	}else{


 $.ajax({
           type: "POST",
           url: "addagent",
           data:$("#addagent").serialize(), // serializes the form's elements.
		  
           success: function(respn)
           {
           
             if(respn==1)
             {
        window.location.href = 'http://localhost/ExploreEnglish/agent/index';
             }else{

        window.location.href = 'http://localhost/ExploreEnglish/agent/addagent';
             }
              
          }
         });






             	}



                    }             
    });
   


  



	    }
   }

function checkstudents()
{

 var teacherid = $('#teacherid').val();
 var courseid  = $('#courseid').val();
 var usertype = $('#usertype').val();
 
 //var attendencedate = $('#attendencedate').val();
 if(usertype == 'teacher')
 {
 window.location.href = 'http://localhost/ExploreEnglish/Attendence/getstudents/'+usertype+'/'+teacherid+'/'+courseid;
 }else
   {
   $('#error').show();
    $('#error').text('Please make sure you are logged in as teacher.');
        $('#error').delay(1000).fadeOut();
  
    return false;

   }


   
 /*$.ajax({
           type: "POST",
           url: "getstudents",
           data:{teacherid:teacherid,courseid:courseid}, // serializes the form's elements.
		  
           success: function(respn)
           {
           	
       
            
              
          }
         });*/


}