/**
 *
 */
$(document).ready(function() {
    $.ajax({
        url: "http://localhost:8080/member?name=test1"
    }).then(function(data, status, jqxhr) {
       $('#name').val(data.name);
       $('#birthday').val(data.birthday);
       $('#sex').val(data.sex);
       console.log(jqxhr);
    });
});