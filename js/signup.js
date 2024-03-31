export default function signupValid() {
  const button = document.querySelector('.signup__form-submit');
  const name = document.querySelector('.signup__form-input_name');
  const email = document.querySelector('.signup__form-input_mail');
  const input = document.querySelectorAll('.signup__form-input');

  function buttonBlock() {
    button.setAttribute('disabled', ' ');
    setTimeout(() => {
      button.removeAttribute('disabled');
    }, 2000);
  }

  function error(input, text) {
    const parent = input.parentElement;
    let errorLabel = document.createElement('div');
    errorLabel.textContent = text;
    errorLabel.classList.add('signup__error-label');
    input.classList.add('signup__error');
    parent.append(errorLabel);
    setTimeout(() => {
      errorLabel.remove();
      input.classList.remove('signup__error');
    }, 2000);
  }

  function validation() {
    let result = true;

    for (const item of input) {
      if (item.value == '') {
        result = false;
        error(item, 'Пустое поле');
        buttonBlock();
      }
    }
    // if (name.value == '' || email.value == '') {
    // }

    return result;
  }

  button.addEventListener('click', ev => {
    ev.preventDefault();
    // debugger;

    if (validation() == true) {
      alert('hello');
    }
  });
}
