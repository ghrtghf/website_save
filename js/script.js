import console from './fafa.js';

barba.init({
  views: [
    {
      namespace: 'login',
      afterEnter() {
        birdsLogin();
        eye();
        logoInfinity();
        inputValidation();
      },
    },
    {
      namespace: 'forgot.password',
      afterEnter() {
        logoInfinity();
        birdsForgotPassword();
      },
    },
    {
      namespace: 'home',
      afterEnter() {
        logoInfinity();
      },
    },
  ],
  transitions: [
    {
      name: 'opacity-transition',
      sync: true,
      leave(data) {
        return gsap.to(data.current.container, {
          opacity: 0,
        });
      },
      enter(data) {
        return gsap.from(data.next.container, {
          opacity: 0,
        });
      },
    },
  ],
});
function birdsLogin() {
  VANTA.BIRDS({
    el: '.login__background',
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    backgroundAlpha: 0.0,
  });
}

function birdsForgotPassword() {
  VANTA.BIRDS({
    el: '.password__background',
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    color1: 0x433c69,
    color2: 0x4395aa,
    backgroundAlpha: 0.0,
  });
}
function logoInfinity() {
  gsap.to('.logo', { repeat: -1, rotate: 360, duration: 5, yoyo: true });
}

function eye() {
  const inputPassword = document.querySelector('.login__form-input_password');
  const closeEye = document.querySelector('.login__eyeClose');
  const eyeButton = document.querySelector('.login__eyeClose-button');
  const eye = document.querySelector('.login__eye');
  const cross = document.querySelector('.login__cross');

  eyeButton.addEventListener('click', () => {
    if (inputPassword.getAttribute('type') == 'password') {
      inputPassword.setAttribute('type', 'text');
      closeEye.classList.add('login__eye-hidden');
      eye.classList.remove('login__eye-hidden');
    } else {
      inputPassword.setAttribute('type', 'password');
      closeEye.classList.remove('login__eye-hidden');
      eye.classList.add('login__eye-hidden');
    }
  });

  cross.addEventListener('click', () => {
    inputPassword.value = '';
  });
}

function inputValidation() {
  function validation() {
    const inputAllValid = document.querySelectorAll('.login__form-input');
    let result = true;

    function errorInput(input, text) {
      const parent = input.parentElement;
      let errorLabel = document.createElement('div');
      errorLabel.textContent = text;
      errorLabel.classList.add('error-label');
      input.classList.add('error');
      parent.append(errorLabel);
      setTimeout(() => {
        errorLabel.remove();
        input.classList.remove('error');
      }, 4000);
    }

    for (let input of inputAllValid) {
      if (input.value == '') {
        result = false;
        errorInput(input, 'Пустое поле');
      } else {
      }
    }
    return result;
  }

  document.querySelector('.login__form').addEventListener('submit', ev => {
    ev.preventDefault();

    if (validation() == true) {
      alert('Авторизированны');
    }
  });
}
