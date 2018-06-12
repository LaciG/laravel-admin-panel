    $(document).ready(function () {
        $('select').material_select();
    });

    $(document).on('change', '#workers', function(){
        getSelected();
    })

    function getSelected(){
        var select = $("#workers option:selected").val();
        console.log(select);
        switch (select) {
            case "Kevesebb mint 30":
                var data = [{value: "Kevesebb mint 100", name: "Kevesebb mint 100"}, {value: "101-1000", name: "101-1000"}];
                break;
            case "31-249":
                var data = [{value: "101-1000", name: "101-1000"}, {value: "Több mint 1000", name: "Több mint 1000"}];
                break;
            case "Több mint 249":
            var data = [{value: "101-1000", name: "101-1000"}, {value: "Több mint 1000", name: "Több mint 1000"}];
                break;
            default:
                $('#clients').empty();
                $('#clients').append("<option value=''>Válasszon</option>");
                $("#clients").material_select()
            break;
        }
        

        var Options = "";
        $.each(data, function(i, val){
            Options=Options+"<option value='"+val.value+"'>"+val.name+"</option>";
        });
        $('#clients').empty();
        $('#clients').append(Options);
        $("#clients").material_select()
    }