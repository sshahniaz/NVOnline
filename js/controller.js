//Username regex check.

export const uNameCheck = (text, uNameError) => {
  let condition1 = /[a-zA-Z0-9]{8,}/; //atleast 8 characters
  let condition2 = /[\s]/; //for the space

  uNameError.style.color = "red";

  if (text == "" || text == null) {
    uNameError.style.display = "block";
    uNameError.innerText = "Username should not be empty";
  }

  // if(isNaN(text)){
  //     uNameError.style.display = "block";
  //     uNameError.innerText = "Username should not only contain numbers";
  // }

  if (!text.match(condition1)) {
    uNameError.style.display = "block";
    uNameError.innerText = "Username Should atleast contain 8 characters";
  }

  if (text.match(condition2)) {
    uNameError.style.display = "block";
    uNameError.innerText = "Username Should not contain spaces";
  }
};

//Dynamic Password check with regex
export const pswdCheck = (text, passwordError, e) => {
  let condition1 = /(?=.*\d)/; //should contain atleast 1 digit
  let condition2 = /(?=.*[a-z])/; //should contain atleast 1 lowercase
  let condition3 = /(?=.*[A-Z])/; //should contain atleast 1 uppercase
  let condition4 = /[a-zA-Z0-9]{8,}/; //should contain atleast 8 characters

  passwordError.style.color = "red";

  if (!text.match(condition1)) {
    passwordError.style.display = "block";
    passwordError.innerText = "Password should contain atleast 1 digit";
    return;
  }

  if (!text.match(condition2)) {
    passwordError.style.display = "block";
    passwordError.innerText = "Password should contain atleast 1 lowercase";
    return;
  }

  if (!text.match(condition3)) {
    passwordError.style.display = "block";
    passwordError.innerText = "Password should contain atleast 1 uppercase";
    return;
  }

  if (!text.match(condition4)) {
    passwordError.style.display = "block";
    passwordError.innerText = "Password should contain atleast 8 characters";
    return;
  }

  passwordError.style.display = "none";
  e.submit();
  return;
};

//REGEX email checker
export const emailCheck = (text, emailError) => {
  let condition =/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,10}).([a-z]{2,8})?$/;

  emailError.style.color = "red";

  if (!text.match(condition)) {
    emailError.style.display = "block";
    emailError.innerText = "Invalid Email Address";
    return;
  }

  emailError.style.display = "none";
  return;
};

//confirm password checker
export const confirmPasswordCheck = (text, initPasswrd, confPasswordError) => {
  confPasswordError.style.color = "red";

  if (text !== initPasswrd) {
    confPasswordError.style.display = "block";
    confPasswordError.innerText = "Passwords don't match";
    return;
  }

  confPasswordError.style.display = "none";
  return;
};
