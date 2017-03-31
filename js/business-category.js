/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.business = window.business || {};
business.clickEvent = function () {
    $("#business_list .terms_condtions").click(function () {
        var msg = $("p", this).text();
        var title = $("h3", this).text();
        theme.fancyAlert({
            title: title,
            message: msg
        });
    });
    $("#business_list .business_category .image").click(function () {
        var parent = $(this).closest(".section");
        $("input", $(this)).click();
        $("#business_list .business_category .image").removeClass("active");
        $(this).addClass("active");
        $("button[data-type='next']", parent).removeClass("disabled").removeAttr("disabled");
    });
    $("#business_list .business_category .image input").click(function (e) {
        e.stopPropagation();
    });


    $("#business_list button[data-type='prev']").click(function () {
        business.sectionSwitch($(this));
    });

};
business.hoverEvent = function () {
    $("#business_list .business_category ul.list li").hover(function () {
        $(this).find(".name").stop().addClass("active");
    },
            function () {
                $(this).find(".name").stop().removeClass("active");
            });

};
business.changeEvent = function () {};
business.submitEvent = function () {
    $("#business_list .child_form").submit(function (e) {
        debugger;
        e.preventDefault();
        var form = $(this);
        var no = form.attr("data-item");
        var button = $("button[data-type='next']", form);
        if (no == '1') {
            business.sectionSwitch(button);
        } else if (no == '2') {
            var check = business.businessInfo($(this));
            if (check)
                business.sectionSwitch(button);
        } else if (no == '3') {
            business.sectionSwitch(button);
        } else if (no == '4') {
            var check = business.personal($(this));
            if (check) {
                var data = [];
                var master = $("#business_list .master_form form");
                $("#business_list .child_form input").each(function (index, item) {
                    var type = $(this).attr("type");
                    if (type == 'radio') {
                        if ($(item).is(":checked")) {
                            data.push($(item));
                        }
                    } else {
                        data.push($(item));
                    }


                });
                for (var i = 0; i < data.length; i++) {
                    master.append(data[i]);
                }
                master.submit();
            }
        }
    });


};
business.sectionSwitch = function (selector) {
    var check = selector.hasClass("disabled");
    if (!check) {
        var parent = $("#business_list");
        var target = selector.attr("data-target");
        target = $(".section[data-item='" + target + "']");
        var step = selector.attr("data-step");
        step = parseInt(step) - 1;
        var type = selector.attr("data-type");
        var step_target = $(".steps .step:nth(" + step + ")", parent);
        if (type == 'next') {
            step_target.addClass("active");
        } else {
            step_target.removeClass("active");
        }
        $(".section", parent).hide();
        target.fadeIn();
    }
};
business.personal = function (form) {
    var number = $(".number", form);
    var phone_check = theme.checkPhone(number);
    var password = $(".password", form).val();
    var c_password = $(".confirm_password", form).val();
    var pass_check = false;
    var pass_length = false;
    if (password != c_password) {
        pass_check = false;
        $(".password_label .error", form).text("Password does not  match");
        $(".password_label .error", form).show();
    } else {
        pass_check = true;
        $(".password_label .error", form).hide();
        if (password.length < 6) {
            pass_length = false;
            $(".password_label .error", form).text("Password must be at least 6 characters");
            $(".password_label .error", form).show();
        } else {
            pass_length = true;
            $(".password_label .error", form).hide();
        }
    }
    if (pass_check && pass_length && phone_check) {
        return true;
    } else {
        return false;
    }
};
business.businessInfo = function (form) {//merchant signup validation
    var number = $(".number", form);
    var phone_check = theme.checkPhone(number);
    if (phone_check) {
        return true;
    } else {
        return false;
    }
};
business.businessRegister = function () {
    if ($("#business_list .fancy_alert.form_filled").length > 0) {
        var msg = $("#business_list .fancy_alert.form_filled").html();
        theme.fancyAlert({
            title: "Hey there,",
            message: msg
        });
    }

};
business.init = function () {
    business.clickEvent();
    business.hoverEvent();
    business.changeEvent();
    business.submitEvent();
    business.businessRegister();
};
$(document).ready(function () {
    business.init();
});