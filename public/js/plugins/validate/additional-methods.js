/**
 * Created by Administrator on 2017/11/27.
 */

//手机号验证

jQuery.validator.addMethod("mobile", function(value, element) {
    var length = value.length;
    var mobile = /^1\d{10}$/;
    return this.optional(element) || (length == 11 && mobile.test(value));
}, "请正确填写您的手机号码");

jQuery.validator.addMethod("tel", function(value, element) {
    var length = value.length;
    var tel = /^\d{7,}$/;
    return this.optional(element) || (length >= 7&&tel.test(value));
}, "电话必须是大于等于7位数的纯数字");
