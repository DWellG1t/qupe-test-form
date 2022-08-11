// phone mask
$(function(){
    $("#phone").mask("+7 (999) 999-99-99");
});

const popup = document.querySelector(".popup-success");
const button = document.querySelector('[type="submit"]');



$('form').submit(function (e) { 
    e.preventDefault();
    let form = $(this);
    $.ajax({
        type: "POST",
        url: "../handler.php",
        data: form.serialize(),
        success: function (response) {
            popup.classList.toggle("popup-success_active");
            button.disabled = true;
            setTimeout(() => { popup.classList.toggle("popup-success_active"); button.disabled = false; }, 3000);
        }
    });
    
});