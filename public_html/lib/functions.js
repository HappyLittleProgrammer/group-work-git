$(document).ready(function () {
    $('#UserType').change(function () {
        var selectedText = $(this).find("option:selected").text();
        
        if(selectedText=='Dakteris' || selectedText=='Registratura' ){
            
            $('#forgotlink').hide();
            $('#emailin').hide();
            $('#idn').show();
            
        }
        else if(selectedText=='Pacients'){
            
            $('#forgotlink').show();
            $('#emailin').show();
            $('#idn').hide();
            
        }
        
        
    });

});