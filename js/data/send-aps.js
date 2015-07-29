$(document).ready(function(){
    
    $("#btn").click(function(){
    $.post("modal/modal-aps.php", //Required URL of the page on server
    { // Data Sending With Request To Server
        pnome:$("#pnome").val(),
        unome:$("#unome").val(),
        tituloa:$("#tituloa").val(),
        titulop:$("#titulop").val(),
        local:$("#local").val(),
        issn:$("#issn").val(),
        volume:$("#volume").val(),
        numero:$("#numero").val(),
        anop:$("#anop").val(),
        localizacao:$("#localizacao").val(),
    },
    function(response,status){ // Required Callback Function
        $("#bingo").html(response);//"response" receives - whatever written in echo of above PHP script.
        $("#form")[0].reset();
    });
 });
    
});