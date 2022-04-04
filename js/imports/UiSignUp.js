import { signUpUserName, signUpUserEmail, signUpUserPassword } from './variables.js';

export class UiSignUp 
{
    static clearFields() {
        signUpUserName.value = "";
        signUpUserEmail.value = "";
        signUpUserPassword.value = "";
    }
    
    static showAlert(message, className) {
        const inpt = document.querySelector('#signUpUsernameInputField');
        const div = document.createElement('div');
        div.className = `alert alert-${className}`;
        div.appendChild(document.createTextNode(message));
        document.querySelector('.sign-up-form').insertBefore(div, inpt);
        setTimeout(() => div.remove(), 3000);
    }
}