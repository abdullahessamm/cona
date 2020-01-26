/* Helper functions */
function nextScreenLinear() { //Go to next screen (scroll down)
    let scrolled = 1,
        Interval = setInterval(() => {
            scrolled >= window.innerHeight ? clearInterval(Interval) : '';
            window.scrollTo(0, scrolled);
            scrolled ++;
        }, 2);
    
}
/* End of helper functions */

let desktopElemens = {
    scrollDownBtn: document.querySelector('#scroll-btn-container'),
    //navbar buttons
    loginBtn: document.querySelector('header .login-btn'),
    signupBtn: document.querySelector('header .signup-btn'),
    //login screen
    loginScreenContainer: document.querySelector('#login-screen-container'),
    showPasswordBtn: document.querySelector('#show-password'),
    passwordField: document.querySelector('input[name="password"]'),
    fbBtn: document.querySelector('#facebook-btn'),
    scBtn: document.querySelector('#soundcloud-btn'), //sound cloud button
    googleBtn: document.querySelector('#google-btn'),
    closeBtn: document.querySelector('#close-login-btn'),
};

desktopElemens.scrollDownBtn.addEventListener('click', nextScreenLinear); //Scroll button click event

//// Desktop navbar buttons ...

desktopElemens.loginBtn.addEventListener('click', () => document.body.appendChild(desktopElemens.loginScreenContainer));
desktopElemens.signupBtn.addEventListener('click', () => window.location.href = '/signup');

//// End of Desktop navbar buttons ...

//// login form ...
desktopElemens.loginScreenContainer.remove();

// show password function
desktopElemens.showPasswordBtn.addEventListener('mousedown', function() {
	desktopElemens.passwordField.setAttribute('type', 'text');
	this.classList.add('active');
});
desktopElemens.showPasswordBtn.addEventListener('mouseup', function() {
	desktopElemens.passwordField.setAttribute('type', 'password');
	this.classList.remove('active');
	desktopElemens.passwordField.focus();
});

//close form function
desktopElemens.closeBtn.addEventListener('click', () => desktopElemens.loginScreenContainer.remove());

//social login
// Code...

//// end of login form...