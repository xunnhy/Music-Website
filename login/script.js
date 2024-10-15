const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
        })
        
    })
})   

let dateFieldVisible = false;

    function showDatePicker() {
      if (!dateFieldVisible) {
        const inputField = document.getElementById('sn-date');
        inputField.type = 'date';
        inputField.focus();
        dateFieldVisible = true;
      }
    }

    function hideDatePicker() {
      if (dateFieldVisible && !document.getElementById('sn-date').value) {
        const inputField = document.getElementById('sn-date');
        inputField.type = 'text';
        inputField.value = '';
        dateFieldVisible = false;
      }
    }
/*links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})*/
$(document).ready(function() {
    $("#sn-date").datepicker({
      dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true,
      yearRange: "1900:2024"
    });
  });



