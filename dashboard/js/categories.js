var value = {};
$(document).ready(function () {
    $('#category').change(function () {
        var value = $(this).val();
        //console.log(value);
        if (value == 0) {
            $('#sub_cat').hide();
        } else {
            $.post('function.php', {value: value}, function(data) {
                $('#sub_cat').show();
                $('#sub_cat').html(data);
            });
        }
    });
});
