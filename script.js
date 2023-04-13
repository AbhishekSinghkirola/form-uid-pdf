"use strict";

const form = document.getElementById("form");

// Handle Form Submit
form.addEventListener("submit", (e) => {
  e.preventDefault();
  const fullName = document.querySelector("input[name=full_name]").value;
  const mobile = document.querySelector("input[name=mobile]").value;
  const city = document.querySelector("input[name=city]").value;

  //   console.log(fullName, mobile, city);
  if (fullName === "") {
    document.querySelector(".name_error").classList.toggle("name_error");
  } else if (mobile === "") {
    document.querySelector(".mobile_error").classList.toggle("mobile_error");
  } else if (city === "") {
    document.querySelector(".city_error").classList.toggle("city_error");
  } else {
    const xmlHttp = new XMLHttpRequest();
    xmlHttp.onload = function () {
      console.log(this.responseText);
    };
    xmlHttp.open("POST", "form_submit.php");
    const data = `{
        "full_name" : ${fullName},
        "mobile" : ${mobile}, 
        "city"=${city},
        "submit"= "submit"
    }`;
    xmlHttp.send(data);
  }
});
