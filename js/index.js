// ganti warna menu ketika path aktif
const currentPath = window.location.pathname;
const currentDir =
  window.location.pathname.split("/").slice(0, -1).join("/") + "/";
const links = document.querySelectorAll(".nav-link");

links.forEach((link) => {
  const linkPath = new URL(
    link.getAttribute("href"),
    window.location.origin + currentDir
  ).pathname;
  console.log("currentPath:", currentPath);
  console.log("linkPath:", linkPath);
  if (linkPath === currentPath) {
    link.classList.add("active");
  }
});

// ngecek password
const succesColor = '#05af76'
document.getElementById('password-login').addEventListener('input', function () {
  const passwordInput = this.value;
  const errorMessage = document.getElementById('password-error');
  const errorduabelas = document.getElementById('duabelas');
  const errorupper = document.getElementById('huruf-besar');
  const errorlower = document.getElementById('huruf-kecil');
  const errorangka = document.getElementById('mengandung-angka');
  const errorsimbol = document.getElementById('mengandung-simbol');
  const lengthCheck = /.{12,16}/; 
  const uppercaseCheck = /[A-Z]/; 
  const lowercaseCheck = /[a-z]/; 
  const numberCheck = /[0-9]/; 
  const symbolCheck = /[!@#$%^&*(),.?":{}|<>]/; 

  if (lengthCheck.test(passwordInput)) {
    errorduabelas.style.color = succesColor;
  } else {
    errorduabelas.style.color = '#ff0000';
  }
  if (uppercaseCheck.test(passwordInput)) {
    errorupper.style.color = succesColor;
  } else {
    errorupper.style.color = '#ff0000';
  }
  if (lowercaseCheck.test(passwordInput)) {
    errorlower.style.color = succesColor;
  } else {
    errorlower.style.color = '#ff0000';
  }
  if (numberCheck.test(passwordInput)) {
    errorangka.style.color = succesColor;
  } else {
    errorangka.style.color = '#ff0000';
  }
  if (symbolCheck.test(passwordInput)) {
    errorsimbol.style.color = succesColor;
  } else {
    errorsimbol.style.color = '#ff0000';
  }

  if (
    lengthCheck.test(passwordInput) &&
    uppercaseCheck.test(passwordInput) &&
    lowercaseCheck.test(passwordInput) &&
    numberCheck.test(passwordInput) &&
    symbolCheck.test(passwordInput)
  ) {
    errorMessage.style.borderColor = succesColor;
    errorMessage.style.color = succesColor;
  } else {
    errorMessage.style.borderColor = '#ff0000';
    errorMessage.style.color = '#ff0000';
  }
});

// ngecek email
const emailInput = document.getElementById('email-input');
const errorEmpty = document.getElementById('error-empty');
emailInput.addEventListener('input', function () {
  const emailValue = emailInput.value;
  if (emailValue === '') {
    errorEmpty.style.display = 'block';
    console.log('email empty');
  } else {
    errorEmpty.style.display = 'none';
  }
});
