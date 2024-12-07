"use strict";

var KTLogin = (function () {
    var _handleFormSignup = function () {
        var wizardEl = KTUtil.getById("kt_login");
        var form = KTUtil.getById("kt_login_signup_form");
        var wizardObj;
        var validations = [];

        if (!form) {
            return;
        }

        // Step 1
        validations.push(
            FormValidation.formValidation(form, {
                fields: {
                    first_name: {
                        validators: {
                            notEmpty: {
                                message: "First name is required",
                            },
                            regexp: {
                                regexp: /^(?![\s])(?!.*\s{3,})[a-z\s]{1,30}$/i,
                                message: "Please enter proper first name.",
                            },
                        },
                    },
                    last_name: {
                        validators: {
                            notEmpty: {
                                message: "Last Name is required",
                            },
                            regexp: {
                                regexp: /^(?![\s])(?!.*\s{3,})[a-z\s]{1,30}$/i,
                                message: "Please enter proper last name.",
                            },
                        },
                    },
                    mobile_number: {
                        validators: {
                            notEmpty: {
                                message: "Mobile number is required",
                            },
                            regexp: {
                                regexp: /^\d{10}$/,
                                message:
                                    "The mobile number must be 10 digits and numeric.",
                            },
                        },
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email address is required",
                            },
                            callback: {
                                message: "Please enter a valid email address.",
                                callback: function (input) {
                                    const value = input.value;
                                    if (value === "") {
                                        return true;
                                    }

                                    // I want the value has to pass both emailAddress and regexp validators
                                    return (
                                        FormValidation.validators
                                            .emailAddress()
                                            .validate({
                                                value: value,
                                            }).valid &&
                                        FormValidation.validators
                                            .regexp()
                                            .validate({
                                                value: value,
                                                options: {
                                                    regexp: /^[a-zA-Z0-9][a-zA-Z0-9._-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
                                                },
                                            }).valid
                                    );
                                },
                            },
                        },
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Password is required.",
                            },
                            stringLength: {
                                max: 50,
                                message:
                                    "The password is maximum 50 characters.",
                            },
                            regexp: {
                                regexp: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~])(?=.*[A-Za-z])[A-Za-z\d!@#$%^&*()_+{}\[\]:;<>,.?~]{8,}$/,
                                message:
                                    "Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one numeric digit, and one special character",
                            },
                        },
                    },
                    password_confirmation: {
                        validators: {
                            notEmpty: {
                                message: "Confirm password is required.",
                            },
                            identical: {
                                compare: function () {
                                    return form.querySelector(
                                        '[name="password"]'
                                    ).value;
                                },
                                message:
                                    "The password and its confirm are not the same",
                            },
                        },
                    },
                    terms_and_contition: {
                        validators: {
                            notEmpty: {
                                message:
                                    "Please accept the terms and conditions to proceed.",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                },
            })
        );

        // Step 2

        // console.log(colorField);
        let step_two_validation = FormValidation.formValidation(form, {
            fields: {
                coaching_name: {
                    validators: {
                        notEmpty: {
                            message: "Coaching centre name is required",
                        },
                        stringLength: {
                            max: 100,
                            min: 3,
                            message:
                                "Coaching centre name is must contain 3 character and maximum 100 characters.",
                        },
                        regexp: {
                            regexp: /^(?!.*\s{3,})[a-zA-Z0-9\s&\.,'@_-]+$/,
                            message:
                                "Please enter proper coaching centre name.",
                        },
                    },
                },
                logo: {
                    validators: {
                        notEmpty: {
                            message: "Logo is required",
                        },
                        file: {
                            maxSize: 1 * 1024 * 1024,
                            extension: "jpeg,jpg,png",
                            message:
                                "The file must be in jpg,jpeg,png format and must not exceed 1MB in size.",
                        },
                    },
                },
                "sport_id[]": {
                    validators: {
                        callback: {
                            message: "Please select sports.",
                            callback: function (input) {
                                // console.log(input);
                                const options =
                                    sportsIdSelected.select2("data");
                                // console.log(options);
                                if (
                                    Array.isArray(options) &&
                                    options.length == "0"
                                ) {
                                    return false;
                                }
                                return true;
                            },
                        },
                    },
                },
                "allowed_gender[]": {
                    validators: {
                        notEmpty: {
                            message: "Please select gender.",
                        },
                    },
                },
                allow_disability: {
                    validators: {
                        notEmpty: {
                            message: "Please select disability.",
                        },
                    },
                },
                "payment_mode": {
                    validators: {
                        notEmpty: {
                            message: "Please select payment mode.",
                        },
                    },
                },
                experience: {
                    validators: {
                        notEmpty: {
                            message: "Please enter experience in year",
                        },
                        stringLength: {
                            max: 5,
                            message: "Enter proper year of experience",
                        },
                        regexp: {
                            regexp: /^(?!.*\s)(?!.*\s[1-9][0-9]*\s)[1-9][0-9]*$|^(?!.*\s)(?!.*\s0(?!\.)\s)(0|[1-9][0-9]*)\.\d*$|^(?!.*\s)(?!.*\s100\.00\s|100\.0\s)(?!100$)(?!.*\s[1-9][0-9]{2,}\s)(?!.*\s\d+\.\d+\s)\d{1,2}(?!\.\d)$/,
                            message: "Please enter proper experience in year.",
                        },
                        callback: {
                            message: "Experience is not more then 100 years.",
                            callback: function (input) {
                                const value = input.value;
                                console.log(value);
                                if (value > 100) {
                                    return false;
                                } else {
                                    return true;
                                }
                            },
                        },
                    },
                },
                bio: {
                    validators: {
                        notEmpty: {
                            message: "Enter coaching center bio.",
                        },
                        regexp: {
                            regexp: /\S/,
                            message: "Only space is not allowed.",
                        },
                        stringLength: {
                            max: 500,
                            message: "Please enter maximum 500 characters.",
                        },
                    },
                },
                facility: {
                    validators: {
                        notEmpty: {
                            message: "Please select at least one facility.",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
            },
        });

        validations.push(step_two_validation);
        const sportsIdSelected = jQuery(
            form.querySelector('[name="sport_id[]"]')
        );
        sportsIdSelected.select2().on("change.select2", function () {
            step_two_validation.revalidateField("sport_id[]");
        });

        //step 3 coaching center details validation
        let form_third_step = FormValidation.formValidation(form, {
            fields: {
                contact_number: {
                    validators: {
                        notEmpty: {
                            message:
                                "Coaching center contact number is required.",
                        },
                        stringLength: {
                            max: 10,
                            min: 10,
                            message: "Contact number must be 10 digits.",
                        },
                        regexp: {
                            regexp: /^[0-9]+$/i,
                            message:
                                "The coaching center contact number is contain only numbers..",
                        },
                    },
                },
                contact_email: {
                    validators: {
                        notEmpty: {
                            message: "Coaching center email is required.",
                        },
                        callback: {
                            message: "Please enter a valid email address.",
                            callback: function (input) {
                                const value = input.value;
                                if (value === "") {
                                    return true;
                                }

                                // I want the value has to pass both emailAddress and regexp validators
                                return (
                                    FormValidation.validators
                                        .emailAddress()
                                        .validate({
                                            value: value,
                                        }).valid &&
                                    FormValidation.validators
                                        .regexp()
                                        .validate({
                                            value: value,
                                            options: {
                                                regexp: /^[a-zA-Z0-9][a-zA-Z0-9._-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
                                            },
                                        }).valid
                                );
                            },
                        },
                    },
                },
                state_id: {
                    validators: {
                        notEmpty: {
                            message: "Please select the state.",
                        },
                        callback: {
                            message: "Please choose the state",
                            callback: function (input) {
                                const options = stateValidate.select2("data");
                                return options != null;
                            },
                        },
                    },
                },
                city_id: {
                    validators: {
                        notEmpty: {
                            message: "Please select the city.",
                        },
                        callback: {
                            message: "Please choose the city",
                            callback: function (input) {
                                const options = cityValidate.select2("data");
                                return options != null;
                            },
                        },
                    },
                },
                address_line1: {
                    validators: {
                        notEmpty: {
                            message: "Coaching center address is required.",
                        },
                        stringLength: {
                            min: 5,
                            max: 200,
                            message: "Address should be between 5 and 200 characters.",
                        },
                        regexp: {
                            regexp: /\S/,
                            message: "Only space is not allowed.",
                        },
                    },
                },
                address_line2: {
                    validators: {
                        notEmpty: {
                            message: "Coaching center address is required.",
                        },
                        stringLength: {
                            min: 5,
                            max: 200,
                            message: "Address should be between 5 and 200 characters.",
                        },
                        regexp: {
                            regexp: /\S/,
                            message: "Only space is not allowed.",
                        },
                    },
                },
                pincode: {
                    validators: {
                        notEmpty: {
                            message: "Coaching center postal code is required.",
                        },
                        stringLength: {
                            max: 6,
                            min: 6,
                            message: "postal code is must be 6 characters.",
                        },
                        regexp: {
                            regexp: /^[0-9]+$/i,
                            message: "The postal code can consist only digits.",
                        },
                    },
                },
                call_start_time: {
                    validators: {
                        notEmpty: {
                            message: "Please select call start time.",
                        },
                    },
                },
                call_end_time: {
                    validators: {
                        notEmpty: {
                            message: "Please select call end time.",
                        },
                        //it should be greater then call start time
                        callback: {
                            message: "Call end time should be greater than call start time.",
                            callback: function (input) {
                                const call_start_time = form.querySelector('[name="call_start_time"]').value;
                                const call_end_time = input.value;
                                var startTime = new Date("2000/01/01 " + call_start_time);
                                var endTime = new Date("2000/01/01 " + call_end_time);

                                // Compare time objects
                                if (endTime <= startTime) {
                                    return {
                                        valid: false,
                                        message: "Call end time should be greater than call start time."
                                    };
                                }
                                return true;
                            }
                        }
                    },

                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
            },
        });
        validations.push(form_third_step);
        const stateValidate = jQuery(
            document.querySelector('[name="state_id"]')
        );
        stateValidate.select2().on("change.select2", function () {
            step_two_validation.revalidateField("state_id");
        });

        const cityValidate = jQuery(document.querySelector('[name="city_id"]'));
        cityValidate.select2().on("change.select2", function () {
            step_two_validation.revalidateField("city_id");
        });

        const payment_method = jQuery(
            form.querySelector('[name="payment_method"]')
        );

        //get the value of payment method and according to that add the validation
        //step 4 bank account details validation
        // Initialize form validation for step four with initial fields
        let stepFourValidation = FormValidation.formValidation(form, {
            fields: {
                account_person_name: {
                    validators: {
                        notEmpty: {
                            message: "Please enter account person name.",
                        },
                        stringLength: {
                            max: 60,
                            message: "Account person name should not exceed 60 characters.",
                        },
                        regexp: {
                            regexp: /^[a-zA-Z][a-zA-Z\s]*$/,
                            message: "Please enter a proper account person name.",
                        },
                    },
                },
                bank_name: {
                    validators: {
                        notEmpty: {
                            message: "Please enter bank name.",
                        },
                        stringLength: {
                            max: 50,
                            min: 3,
                            message: "Bank name should be between 3 and 50 characters.",
                        },
                        regexp: {
                            regexp: /^(?!.*\s{3,})[a-z\s]+$/i,
                            message: "Bank name should only contain alphabetic characters.",
                        },
                    },
                },
                account_number: {
                    validators: {
                        notEmpty: {
                            message: "Please enter the bank account number.",
                        },
                        stringLength: {
                            max: 16,
                            min: 9,
                            message: "Bank account number should be between 9 and 16 characters.",
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: "Please enter a proper account number.",
                        },
                    },
                },
                ifsc_code: {
                    validators: {
                        notEmpty: {
                            message: "Please enter the bank IFSC code.",
                        },
                        stringLength: {
                            max: 11,
                            min: 11,
                            message: "IFSC code must be 11 characters long.",
                        },
                        regexp: {
                            regexp: /^[A-Za-z]{4}0[A-Z0-9]{6}$/,
                            message: "Please enter a proper IFSC code.",
                        },
                    },
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
            },
        });

        payment_method.on("change", function () {
            const selectedMethod = payment_method.val();

            // Remove existing validations
            stepFourValidation.destroy();
            // also remove is-invalid class
            $(".form-control").removeClass("is-invalid");
            // Define fields based on payment method
            let fields = {};

            if (selectedMethod == "upi_id") {
                fields = {
                    upi_id: {
                        validators: {
                            notEmpty: {
                                message: "Please enter UPI ID.",
                            },
                            stringLength: {
                                max: 50,
                                min: 3,
                                message: "UPI ID should be between 3 and 50 characters.",
                            },
                            regexp: {
                                regexp: /^[0-9A-Za-z.-]{2,256}@[A-Za-z]{2,64}$/,
                                message: "Please enter a proper UPI ID.",
                            },
                        },
                    }
                };
                $(".account_details").hide();
                $(".upi_id").show();
            }
            else {
                fields = {
                    account_person_name: {
                        validators: {
                            notEmpty: {
                                message: "Please enter account person name.",
                            },
                            stringLength: {
                                max: 60,
                                message: "Account person name should not exceed 60 characters.",
                            },
                            regexp: {
                                regexp: /^[a-zA-Z][a-zA-Z\s]*$/,
                                message: "Please enter a proper account person name.",
                            },
                        },
                    },
                    bank_name: {
                        validators: {
                            notEmpty: {
                                message: "Please enter bank name.",
                            },
                            stringLength: {
                                max: 50,
                                min: 3,
                                message: "Bank name should be between 3 and 50 characters.",
                            },
                            regexp: {
                                regexp: /^(?!.*\s{3,})[a-z\s]+$/i,
                                message: "Bank name should only contain alphabetic characters.",
                            },
                        },
                    },
                    account_number: {
                        validators: {
                            notEmpty: {
                                message: "Please enter the bank account number.",
                            },
                            stringLength: {
                                max: 16,
                                min: 9,
                                message: "Bank account number should be between 9 and 16 characters.",
                            },
                            regexp: {
                                regexp: /^[0-9]+$/,
                                message: "Please enter a proper account number.",
                            },
                        },
                    },
                    ifsc_code: {
                        validators: {
                            notEmpty: {
                                message: "Please enter the bank IFSC code.",
                            },
                            stringLength: {
                                max: 11,
                                min: 11,
                                message: "IFSC code must be 11 characters long.",
                            },
                            regexp: {
                                regexp: /^[A-Za-z]{4}0[A-Z0-9]{6}$/,
                                message: "Please enter a proper IFSC code.",
                            },
                        },
                    }
                };
                $(".account_details").show();
                $(".upi_id").hide();
            }

            stepFourValidation = FormValidation.formValidation(form, {
                fields: fields,
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                },
            });
        });



        // let stepFourValidation = FormValidation.formValidation(form, {
        //     fields: {
        //         account_person_name: {
        //             validators: {
        //                 notEmpty: {
        //                     message: "Please enter account person name.",
        //                 },
        //                 stringLength: {
        //                     max: 60,
        //                     message:
        //                         "Account person name is not more then 60 characters.",
        //                 },
        //                 regexp: {
        //                     regexp: /^[a-zA-Z][a-zA-Z\s]*$/,
        //                     message: "Please enter proper account person name.",
        //                 },
        //             },
        //         },
        //         bank_name: {
        //             validators: {
        //                 notEmpty: {
        //                     message: "Please enter bank name.",
        //                 },
        //                 stringLength: {
        //                     max: 50,
        //                     min: 3,
        //                     message:
        //                         "The bank name is minimum 3 character and maximum 50 character.",
        //                 },
        //                 regexp: {
        //                     regexp: /^(?!.*\s{3,})[a-z\s]+$/i,
        //                     message:
        //                         "The bank name is only accept the alpha characters.",
        //                 },
        //             },
        //         },
        //         account_number: {
        //             validators: {
        //                 notEmpty: {
        //                     message: "Please enter the bank account number.",
        //                 },
        //                 stringLength: {
        //                     max: 16,
        //                     min: 9,
        //                     message:
        //                         "The bank account number is minimum 9 and maximum 16 character.",
        //                 },
        //                 regexp: {
        //                     regexp: /^[0-9]+$/,
        //                     message: "Please enter proper account number.",
        //                 },
        //             },
        //         },
        //         ifsc_code: {
        //             validators: {
        //                 notEmpty: {
        //                     message: "Please enter the bank ifsc code.",
        //                 },
        //                 stringLength: {
        //                     max: 11,
        //                     min: 11,
        //                     message:
        //                         "The bank account ifsc must be 11 characters.",
        //                 },
        //                 regexp: {
        //                     regexp: /^[A-Za-z]{4}0[A-Z0-9]{6}$/,
        //                     message: "Please enter proper ifsc code.",
        //                 },
        //             },
        //         },
        //     },
        //     plugins: {
        //         trigger: new FormValidation.plugins.Trigger(),
        //         bootstrap: new FormValidation.plugins.Bootstrap(),
        //     },
        // });

        //manually add the form validation rules for step 4
        const submitButton = document.getElementById(
            "kt_login_signup_form_submit_button"
        );
        submitButton.addEventListener("click", function (e) {
            e.preventDefault();
            if (stepFourValidation) {
                // console.log("hii hardik");
                // debugger;
                stepFourValidation.validate().then(function (status) {
                    if (status == "Valid") {
                        submitButton.setAttribute("data-kt-indicator", "on");
                        submitButton.disabled = true;
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;
                            form.submit(); // Submit form
                        }, 1000);
                    }
                });
            }
        });

        // Initialize form wizard
        wizardObj = new KTWizard(wizardEl, {
            startStep: 1, // initial active step number
            clickableSteps: false, // to make steps clickable this set value true and add data-wizard-clickable="true" in HTML for class="wizard" element
        });

        // Validation before going to next page
        wizardObj.on("beforeNext", function (wizard) {
            validations[wizard.getStep() - 1]
                .validate()
                .then(function (status) {
                    // return false;
                    if (status == "Valid") {
                        wizardObj.goNext();
                        KTUtil.scrollTop();
                    } else {
                        KTUtil.scrollTop();
                    }
                });

            wizardObj.stop(); // Don't go to the next step
        });

        // Change event
        wizardObj.on("change", function (wizard) {
            KTUtil.scrollTop();
        });
    };

    // Public Functions
    return {
        init: function () {
            // _handleFormSignin();
            // _handleFormForgot();
            _handleFormSignup();
        },
    };
})();

// Class Initialization
jQuery(document).ready(function () {
    KTLogin.init();
});
