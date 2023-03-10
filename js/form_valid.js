//Get the functions from controller

import {
  uNameCheck,
  emailCheck,
  pswdCheck,
  confirmPasswordCheck,
} from "./controller.js";

//Get the password field

let password = document.querySelector("input#psw");
let passwordError = document.querySelector("p#pswError");
passwordError.style.display = "none";
password.addEventListener('input', (e) => {
  e.preventDefault();
  let text = password.value + `${e.key}`;
  pswdCheck(text, passwordError ,e);
});
