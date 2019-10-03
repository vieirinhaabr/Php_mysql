
//Seletor por ID
$("#tableCategoria").bootstrapTable();

$("#modal").modal();

$("#formularioCategoria").on("submit", function(event){

    event.preventDefault();

    var form = $(this);

    var options = {

        url: $(form).attr("action"),
        method: $(form).attr("method"),
        data: $(form).serialize(),
        success: function(data){
            M.toast({html:data});
            $("modal").modal("close");
            $("#tableCategoria").bootstrapTable("refresh");
        }
    };

    $.ajax(options);
});