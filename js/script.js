/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//start of events

theme.clickEvent = function () {
    $(document).on("click", ".tab-container .tabs .tab", function () {
        var parent = $(this).closest(".tab-container");
        $(".tab", parent).removeClass("active");
        $(this).addClass("active");
        var target = $(this).attr("data-index");
        target = $(".data[data-index='" + target + "']", parent);
        $(".data", parent).removeClass("active");
        target.addClass("active");
    });
    $(".mobile_menu_btn>a").click(function(e){
    e.stopPropagation();
    theme.openMobileMenu();
  });
  $("#mobile_drawer .drawer_close").click(function(){
    theme.closeMobileMenu();
  });
    $(document).on("click",".black_bg",function(){
    theme.closeAllDrawer();
  });
  $(document).on("click",".body_wrapper.active",function(){
    theme.closeAllDrawer();
  });
  $(".admin_menu_btn").click(function (){
      theme.adminMenuOpen();
  });
};
theme.hoverEvent = function () {
};
theme.changeEvent = function () {};
theme.submitEvent = function () {
    $("#customer_signup .page_form form").submit(function (e) {
        var form = $(this);
        var data_submit = form.attr("data-go");
        if (data_submit) {

        } else {
            e.preventDefault();
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
            if (pass_length && pass_check) {
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
theme.fancyAlert = function (opts) {
    $.fancybox.open('<div class="my_dialog">' + '<h3>' + opts.title + '</h3>' +
            '<p>' + opts.message + '</p>', {
            });
};
theme.imageFile = function (selector) {
    var val = selector.val();
    var label = selector.siblings("label");
    switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
        case 'gif':
        case 'jpg':
        case 'png':
          $(".error",label).hide();
            return true;
            break;
        default:
            selector.val('');
            // error message here
           $(".error",label).show();
           return false;
            break;
    }
};
theme.openMobileMenu = function(){
  $("#mobile_drawer").addClass("active");
  $(".body_wrapper").addClass("active-left active");
  theme.blankBgOpen();
};
theme.closeMobileMenu = function(){
  $("#mobile_drawer").removeClass("active");
  $(".body_wrapper").removeClass("active-left active");
  theme.blankBgClose();
};
theme.blankBgOpen = function(){
  $(".black_bg").fadeIn();
  $("html").addClass("overflow_hidden");
  $("body").addClass("overflow_hidden");
};
theme.blankBgClose = function(){
  $(".black_bg").fadeOut();
  $("html").removeClass("overflow_hidden");
  $("body").removeClass("overflow_hidden");
};
theme.initMobileMenu = function(){
  var data = $("#mobile_drawer");
  $("body").append(data);
};
theme.closeAllDrawer = function(){
  theme.closeMobileMenu();
  theme.adminMenuClose();
};
theme.adminMenuOpen = function (){
    $(".admin_menu").addClass("active");
    theme.blankBgOpen();
};
theme.adminMenuClose = function (){
    $(".admin_menu").removeClass("active");
    theme.blankBgClose();
};
theme.init = function () {
    theme.clickEvent();
    theme.hoverEvent();
    theme.changeEvent();
    theme.submitEvent();
    theme.initMobileMenu();
};
theme.load = function () {
    $(window).load(function () {});
    $(window).resize(function () {});
};
theme.scroll = function () {};
$(document).ready(function () {
    theme.init();
    theme.load();
    theme.scroll();
});

