$(document).ready(function(){
    
    $('#name').blur(function(){
                        
        $.post('validate_form', {field: $('#name').attr('id'), value: $('#name').val() }, 
                function(returnedData){
                     validation(returnedData, $('#name').attr('id'));    
                });
                
                
        }); 
        
        
        $('#surname').blur(function(){
                        
        $.post('validate_form', {field: $('#surname').attr('id'), value: $('#surname').val() }, 
                function(returnedData){
                     validation(returnedData, $('#surname').attr('id'));    
                });
                
                
        }); 
        
        $('#age').blur(function(){
                        
        $.post('validate_form', {field: $('#age').attr('id'), value: $('#age').val() }, 
                function(returnedData){
                     validation(returnedData, $('#age').attr('id'));    
                });
                
                
        }); 
        
        $('#email').blur(function(){
                        
        $.post('validate_form', {field: $('#email').attr('id'), value: $('#email').val() }, 
                function(returnedData){
                     validation(returnedData, $('#email').attr('id'));    
                });
                
                
        }); 
        
        $('#addres').blur(function(){
                        
        $.post('validate_form', {field: $('#addres').attr('id'), value: $('#addres').val() }, 
                function(returnedData){
                     validation(returnedData, $('#addres').attr('id'));    
                });
                
                
        }); 
        
        
        
        
        
        
    function validation(error, field){
        console.log(error);
        
        if(error){
            if($('#'+field+'-error').length == 0){
              $('#'+field+'').after('<div id="'+field+'-error"> '+error+'</div>');            
            }
        }else {
             $('#'+field+'-error').remove();
        }        
    }
});
     