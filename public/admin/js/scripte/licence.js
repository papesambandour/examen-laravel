

$(function () {
    $("#produitcode").val('')
    $("#packcode").val('')
    $("#key").val('')


    /*GET PACK BY PRODUIT*/
    $("#produitcode").on('change',function (e) {
        $.get('/admin/getPacksBycodeProduit',{
            codeproduit :  $("#produitcode").val()
        }).done(function (data) {
            var dataParsed = JSON.parse(data);
            var packs = dataParsed.data;
            var html = '<option value="">---Faite votre choix---</option>';
            var prefix = $("#produitcode").val() == "KPS_AV" ? "Kaspersky Anti-Virus " :(
                $("#produitcode").val() == "KPS_IS" ? " KasperskyInternet Security " : "Kaspersky Total Security ")
            for (var i = 0; i < packs.length; i++)
            {
                html += `<option value="${packs[i].code_pk}">${prefix} ${packs[i].name_pk}</option>`;
            }
            $("#packcode").html(html);
        }).fail(function (err) {
            console.log(err);
            alert('Erreur reseaux')
        })
    });
    /*SAVE LICENCE*/
    $("#formLicence").on('reset',function () {
        $("#packcode").html('');
    });

    $("#formLicence").on('submit',function (e) {
        e.preventDefault();
        $.post('/admin/saveLicence',{
            codepack :  $("#packcode").val(),
            key :  $("#key").val(),
        }).done(function (data) {
            var dataParsed = JSON.parse(data);
            if(dataParsed.status == 200)
            {
                $('#formLicence')[0].reset();
                $("#packcode").html('');
                $("#success").fadeIn(2000,function () {
                    $("#success").fadeOut(2000)
                });
            }else {
                $("#success").fadeIn(2000,function () {
                    $("#success").fadeOut(2000)
                });
            }

        }).fail(function (err) {
            console.log(err);
            $("#danger").fadeIn(2000,function () {
                $("#danger").fadeOut(2000)
            });
        })
    });

});
