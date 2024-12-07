jQuery.validator.addMethod(
    "not_empty",
    function(value, element) {
        return this.optional(element) || /\S/.test(value);
    },
    "Only space is not allowed."
);

jQuery.validator.addMethod(
    "no_space",
    function(value, element) {
        return value.indexOf(" ") < 0 && value != "";
    },
    "Space is not allowed."
);

$.validator.addMethod("alphaonly", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z]+$/);
});

$.validator.addMethod(
    "valid_email",
    function(value, element) {
        return (
            this.optional(element) ||
            /^([\w-\.\+\_]+@([\w-]+\.)+([\w-]{2,})+)?$/.test(value)
        );
    },
    "Please enter a valid email address."
);


/**
 * Check to allow only alphabets and space
 */
$.validator.addMethod("alpha_space", function(value, element) {
    return this.optional(element) || value.match(/^[a-zA-Z\s]+$/);
});