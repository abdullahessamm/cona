/**********  DESKTOP  ************/

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

let desktopElements = {
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

desktopElements.scrollDownBtn.addEventListener('click', nextScreenLinear); //Scroll button click event

//// Desktop navbar buttons ...

desktopElements.loginBtn.addEventListener('click', () => document.body.appendChild(desktopElements.loginScreenContainer));
desktopElements.signupBtn.addEventListener('click', () => window.location.href = '/signup');

//// End of Desktop navbar buttons ...

//// login form ...
desktopElements.loginScreenContainer.remove();

// show password function
desktopElements.showPasswordBtn.addEventListener('mousedown', function() {
	desktopElements.passwordField.setAttribute('type', 'text');
	this.classList.add('active');
});
desktopElements.showPasswordBtn.addEventListener('mouseup', function() {
	desktopElements.passwordField.setAttribute('type', 'password');
	this.classList.remove('active');
	desktopElements.passwordField.focus();
});

//close form function
desktopElements.closeBtn.addEventListener('click', () => desktopElements.loginScreenContainer.remove());

//social login
// Code...

//// end of login form...


/********** END OF DESKTOP ************/


/**********  PHONE ************/

let mobileElements = {
    mobileMenuBtn: document.querySelector('#mobile-menu-btn'),
    mobileMenu: document.querySelector('#mobile-menu'),
};

let functions = {
    openMenu: () => {
        mobileElements.mobileMenu.classList.add('open-with-animation');
    },
};

mobileElements.mobileMenuBtn.ontouchend !== undefined ? mobileElements.mobileMenuBtn.ontouchend = functions.openMenu : mobileElements.mobileMenuBtn.onclick = functions.openMenu;

/**********  END OF PHONE ************/

