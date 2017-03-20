/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//start of events
theme.clickEvent = function () {
};
theme.hoverEvent = function () {
};
theme.changeEvent = function () {
};
theme.submitEvent = function () {
    $("#business_list form").submit(function (e) {
        var form = $(this);
        var data_submit = form.attr("data-go");
        if (data_submit) {

        } else {
            e.preventDefault();
            var number = $(".number", form);
            var phone_check = theme.checkPhone(number);
            var password = $(".password", form).val();
            var c_password = $(".confirm_password", form).val();
            var pass_check = false;
            var pass_length = false;
            
            var select_check = theme.checkSelect($(".select", form));
            if (password != c_password) {
                pass_check = false;
                $(".password_label .error",form).text("Password does not  match");
                $(".password_label .error", form).show();
            } else {
                pass_check = true;
                $(".password_label .error", form).hide();
                if(password.length < 6){
                    pass_length = false;
                    $(".password_label .error",form).text("Password must be at least 6 characters");
                    $(".password_label .error", form).show();
                }
                else{
                    pass_length = true;
                    $(".password_label .error", form).hide();
                }
            }
            if (phone_check && pass_check && select_check && pass_length) {
                $(this).attr("data-go", true);
                $(this).submit();
            }
        }
    });
};
//End of events

//functions 

theme.formSubmit = function (selector, callback) {//Ajax Submit Form 
    var form = selector;
    if (form.length > 0) {
        var url = form.attr("action");
        var params = {
            type: 'POST',
            url: url,
            data: form.serialize(),
            success: function (line_item) {
                var data = JSON.parse(line_item);
                callback(data);
            },
            error: function (XMLHttpRequest, textStatus) {
            }
        };
        jQuery.ajax(params);
    }
};
theme.checkPhone = function (selector) {
    var phone = selector.val();
    var phoneNum = phone.replace(/[^\d]/g, '');
    if (phoneNum.length > 6 && phoneNum.length < 11) {
        $(".error", selector.prev()).hide();
        return true;
    } else {
        $(".error", selector.prev()).show();
        return false;
    }
};
theme.checkSelect = function (selector) {
    var value = selector.val();
    if (value == 'null') {
        $(".error", selector.prev()).show();
        return false;
    } else {
        $(".error", selector.prev()).hide();
        return true;
    }
}
theme.init = function () {
    theme.clickEvent();
    theme.hoverEvent();
    theme.changeEvent();
    theme.submitEvent();
};
theme.load = function () {
    $(window).load(function () {

    });
    $(window).resize(function () {

    });
};
theme.scroll = function () {

};
$(document).ready(function () {
    theme.init();
    theme.load();
    theme.scroll();
});

