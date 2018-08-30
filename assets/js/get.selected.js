var tmp = [];
var multipleID = [];
var multipleName = [];
$(document).ready(function() {
    $("input[name='albumNames']").change(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            var next = checked.split('-');
            tmp.push(checked);
            multipleID.push(next[0]);
            multipleName.push(next[1]);
            console.log(multipleID);
        } else {
            var next = checked.split('-');
            tmp.splice($.inArray(checked, tmp), 1);
            multipleID.splice($.inArray(next[0], multipleID), 1);
            multipleName.splice($.inArray(next[1], multipleName), 1);
            console.log(multipleID);
        }
    });
});