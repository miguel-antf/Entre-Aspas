$(document).ready(function(){
    
    //FORM LIVRO
    $('#selectop').change(function(){
        if ($('option:selected', this).val() == 1) { 
            $("#content").load("forms/form-livro.php");
        }
    });
    
    //FORM APS  
    $('#selectop').change(function(){
        if ($('option:selected', this).val() == 2) { 
            $("#content").load("forms/form-aps.php");
        }
    });
    
    //FORM TESE
    $('#selectop').change(function(){
        if ($('option:selected', this).val() == 3) { 
            $("#content").load("forms/form-tese.php");
        }
    });

    //Abre DIV
    $("#res").click(function(){
        $("#about").show();
    });
    $('#bform').click(function() {
        $('#modal-body').html($('#pnome').val());
    });
    
});
