window.admin = window.admin || {};
admin = {};
admin.clickEvent = function () {};
admin.hoverEvent = function () {};
admin.changeEvent = function () {
    $('#admin_dash .file-field input').on('change', function () {
        admin.sizeValidaiton($(this));
    });
    $("#admin_dash .file-field input").change(function () {
        theme.imageFile($(this));
    });
};
admin.submitEvent = function () {
    $("#admin_dash .add_category").submit(function (e) {

        var form = $(this);
        var check = $(this).attr("data-go");
        if (cn(check)) {
            e.preventDefault();
            var input = $("#admin_dash .file-field input");
            var size = admin.sizeValidaiton(input);
            var type = theme.imageFile(input);
            if (size && type) {
                form.attr("data-go", "go");
                form.submit();
            }
        }
    });
};
admin.sizeValidaiton = function (selector) {
    var size = selector[0].files[0].size;
  
    var label = selector.siblings("label");
    if (size > 1000000 || size < 102400) {
        $(".size_error", label).show();
        return false;
    } else {
        $(".size_error", label).hide();
        return true;
    }
};
admin.init = function () {
    admin.clickEvent();
    admin.hoverEvent();
    admin.changeEvent();
    admin.submitEvent();
};
$(document).ready(function () {
    admin.init();
});