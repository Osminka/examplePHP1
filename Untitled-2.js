document.getElementById("otpravka").onclick = function() { 
    let side1 = document.querySelector(".fio");
    let side2 = document.querySelector(".login");
    let side3 = document.querySelector(".pass");
    let side4 = document.querySelector(".age");
    let side5 = document.querySelector(".email");
    let side6 = document.querySelector(".pol");
    if(side1.value!="" || side2.value!="" || side3.value!="" || side4.value!="" || side5.value!=""|| side6.value!="") {
            // side1.style.borderColor = '#90EE90';
            // side2.style.borderColor = '#90EE90';
            alert("Форма отправлена!");
      }else{
          alert("Форма не отправлена! Заполните все поля!");
      }
    
}