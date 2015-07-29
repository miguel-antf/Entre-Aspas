$(document).ready(function(){
    
    $("#btn").click(function(){
    $.post("modal/modal-livro.php", //Required URL of the page on server
    { // Data Sending With Request To Server
        pnome:$("#pnome").val(),
        unome:$("#unome").val(),
        titulo:$("#titulo").val(),
        edicao:$("#edicao").val(),
        local:$("#local").val(),
        editor:$("#editor").val(),
        ano:$("#ano").val(),
        isbn:$("#isbn").val(),
    },
    function(response,status){ // Required Callback Function
        $("#bingo").html(response);//"response" receives - whatever written in echo of above PHP script.
        $("#form")[0].reset();
    });
 });
    
});