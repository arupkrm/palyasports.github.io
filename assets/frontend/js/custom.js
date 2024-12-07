//Coaching center custom js here
$(".select2").select2(); //single
// $(".select2_multiple").select2(); //multiple
//when key is press then only digits are enter
$(".only_digit_enter").on("keypress", function (event) {
    var aCode = event.which ? event.which : event.keyCode;
    if (aCode > 31 && (aCode < 48 || aCode > 57)) return false;
    return true;
});


onload = function () {
    var ele = document.querySelector(".only_digit_with_dot");
    ele.onkeypress = function (e) {
        if (isNaN(this.value + "" + String.fromCharCode(e.charCode)))
            return false;
    };
    ele.onpaste = function (e) {
        e.preventDefault();
    };
};

const targetElement = document.getElementById("kt_profile_avatar");
// Check if the target element exists
if (targetElement) {
  // Store the original background image dynamically
  const originalBackgroundImage = targetElement.style.backgroundImage;

  // Function to handle background image toggle
  function updateBackgroundImage() {
    if (targetElement.classList.contains("image-input-changed")) {
      targetElement.style.backgroundImage = "none"; // Remove background image
    } else {
      targetElement.style.backgroundImage = originalBackgroundImage; // Restore original background image
    }
  }

  // Create a MutationObserver instance
  const observer = new MutationObserver(() => {
    updateBackgroundImage();
  });

  // Start observing the target element for attribute changes
  observer.observe(targetElement, { attributes: true, attributeFilter: ["class"] });

  // Initial check
  updateBackgroundImage();
} else {
  console.warn("Element with ID 'kt_profile_avatar' not found!");
}