$(document).ready(function () {

    var userrole = $("#userrole").val();
    if (userrole == "Student") {

        $('#divhide').hide();  //hiding experience and detail fields

    }
    else{
        $('#divhide').show();
    }


    $("#userrole").change(function () {

        //showing and hiding fields on the bases of user role selected
        var userrole = $("#userrole").val();
        if (userrole == "Trainer") {
            $('#divhide').show();
        }
        else if (userrole == "Student") {

            $('#divhide').hide();

        }
    });
});