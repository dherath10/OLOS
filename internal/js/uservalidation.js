
$(document).ready(function(){
    $('form').submit(function(){
       
        var user_fname=$('#user_fname').val();
        var user_lname=$('#user_lname').val();
        var user_email=$('#email').val(); 
        var user_dob=$('#user_dob').val();
var email=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,6})+$/;
        if(user_fname==""){
            $('#msg').text("Empty First Name");
            $('#user_fname').focus();
            return false;
        }       
        if(user_lname==""){
            $('#msg').text("Empty Last Name");
            $('#user_lname').focus();
            return false;
        }        
        if(!user_email.match(email)){
             $('#msg').text("Invalid Email");
            $('#email').focus();
            $('#email').select();
            return false;
        }
        
   var hid=$('#hid').val();
   if(hid==0){
       $('#msg').text("Existing Email");
        $('#email').focus();
        $('#email').select()
        return false;      
       
   }
        
        
        
        if(!($('#male').is(':checked') || $('#female').is(':checked'))){
            $('#msg').text("Please select your gender");
            return false;
        }
        
        if(user_dob!=""){
            //alert(user_dob);
            var cdate=new Date();
            var cyear=cdate.getFullYear();
            var cmonth=cdate.getMonth();
            var cd=cdate.getDate();
            
            var ddate=new Date(user_dob);
            var dyear=ddate.getFullYear();
            var dmonth=ddate.getMonth();
            var dd=ddate.getDate();
            
            var age=cyear-dyear;
            var m=cmonth-dmonth;
            var d=cd-dd;
            
            if(m<0 || (m==0 && d<0)){
                age--;
            } 
            
            if(age<18){
                $('#msg').text("Under Age");
                $('#user_dob').focus();
                $('#user_dob').select();
            return false;
            }    
            
            if(age>60){
                $('#msg').text("Over Age");
                $('#user_dob').focus();
                $('#user_dob').select();
            return false;
            }    
            
            
        }       
        
       var nicpat=/^[0-9]{9}[vVxX]$/;
       var user_nic=$('#user_nic').val();
       var user_dob=$('#user_dob').val();
       if(user_nic!=""){
           if(!user_nic.match(nicpat)){
               $('#msg').text("Invalid NIC");
               $('#user_nic').focus();
               $('#user_nic').select();
               
               return false;
           }
       }
       if(user_dob!="" && user_nic!=""){
        var ypat1=user_dob.substring(2,4); 
        var ypat2=user_nic.substring(0,2);
        if(ypat1!=ypat2){           
            $('#msg').text("DOB and NIC are not matching");
            $('#user_nic').focus();
            $('#user_nic').select();
            return false;
        }
        
       }
       
       var user_tel=$("#user_tel").val();
       var telpat=/^[0][0-9]{9}$/;
       var telpat1=/^\+94[0-9]{9}$/;
       if(user_tel!=""){
       if(!(user_tel.match(telpat) || user_tel.match(telpat1))){           
            $('#msg').text("Invalid Telephone No");
            $('#user_tel').focus();
            $('#user_tel').select();
            return false;
        } 
    }
    var role_id=$("#role_id").val();
    if(role_id==""){
        $('#msg').text("Please Select a Role Name");
            $('#role_id').focus();
            return false;
    }
    
    var user_image=$('#user_image').val();
    if(user_image!=""){
        var ext=user_image.split(".");
        var len=ext.length;
        var e=ext[len-1];
        var ex=e.toLowerCase();
        var arr=['jpg','png','gif','jpeg','bmp'];
        if($.inArray(ex,arr)==-1){
            $('#msg').text("Invalid Image Extension");
            $('#user_image').focus();
            return false;
        }
    }
    
    
   
  });
    
});



