$(document).ready(function() {
    //INSERT 
    $("#btnCadastrar").click(function(e) {
        var obj = {
            txtNome: $('#txtNome').val(),
            txtEmail: $('#txtEmail').val(),
            txtTelefone: $('#txtTelefone').val()
        };
        //spResultado
        $.ajax({
            type: "POST",
            url: "UsuarioAction.php?req=1",
            dataType: "TEXT",
            data: obj,
            beforeSend: function() {
                $('#spResultado').html("Processando Aguarde ");
            },
            success: function(data) {

                if (data == 1) {
                    $('#spResultado').css("color", "green");
                    $('#spResultado').html("Cadastrado ");
                } else {
                    $('#spResultado').css("color: red ");
                    $('#spResultado').html("Falha na comunicação com o servidor ");
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
        console.log(obj);
    });
    //CONSULTA
    $("#btnConsultar").click(function() {

        $.ajax({
            type: "GET",
            url: "UsuarioAction.php?req=2",
            dataType: "TEXT",
            data: {},
            success: function(data) {
                $("#bqResultado").html(data);
                var dt = data.split("|");
                for (let index = 0; index < dt.length; index++) {
                    // console.log(dt[index]);
                    $("#tbNome").val(dt[index].split(":")[1]);
                    console.log(dt[index].split(":")[index]);
                }
                // $("#txtNome").val(dt[0].split(":")[1]);
                // $("#txtEmail").val(dt[1].split(":")[1]);
                // $("#txtTelefone").val(dt[3].split(":")[1]);

            },
            error: function(error) {
                console.log(error);
            }
        });

    });
});