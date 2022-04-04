import { signInUserName, signInUserPassword } from './variables.js';

export class UiSignIn
{
    static clearFields() {
        signInUserName.value = "";
        signInUserPassword.value = "";
    }
    
    static showAlert(message, className) {
        const inpt = document.querySelector('#signInUsernameInputField');
        const div = document.createElement('div');
        div.className = `alert alert-${className}`;
        div.appendChild(document.createTextNode(message));
        document.querySelector('.sign-in-form').insertBefore(div, inpt);
        setTimeout(() => div.remove(), 2000);
    }
}