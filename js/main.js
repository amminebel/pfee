// DOM Variables
import { container, signInButton, signUpButton, signInUserName, signInUserPassword, signUpUserName, signUpUserEmail, signUpUserPassword, formSignIn, formSignUp
} from './imports/variables.js';


// User interface class For handling Boostrap5 (show alert, clear fields)
import { UiSignIn } from './imports/UiSignIn.js';
import { UiSignUp } from './imports/UiSignUp.js';



//Css Animation Events 
signUpButton.addEventListener('click', () => {
    container.classList.add('sign-up-mode');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('sign-up-mode');
});


// Inputs Validation Events 
formSignIn.addEventListener('submit', (e) => {
    e.preventDefault();
    if(signInUserName.value === '' || signInUserPassword.value === '') {
        UiSignIn.showAlert('Please file in all fields', 'danger');
    }  else {  
        fetch('server/usersServer.php')
        .then(res => res.json())
        .then(users => {
            const indexUserName = users.findIndex(user => user.userName === signInUserName.value);
            const indexUserPassword = users.findIndex(user => user.userPassword === signInUserPassword.value);
            if(indexUserName === -1 || indexUserPassword === -1 || (indexUserName != indexUserPassword)) {
                UiSignIn.showAlert('username or password is incorrect', 'danger');
            } else {
                formSignIn.submit();
                UiSignIn.clearFields();
            }
        })
        .catch(error => console.log(error));
    }
});

formSignUp.addEventListener('submit', (e) => {
    e.preventDefault();
    if(signUpUserName.value === '' || signUpUserPassword.value === '' || signUpUserEmail === '') {
        UiSignUp.showAlert('Please file in all fields', 'danger');
    } else {
        fetch('server/usersServer.php')
        .then(res => res.json())
        .then(users => {
            const indexUserName = users.findIndex(user => user.userName === signUpUserName.value);
            const indexUserEmail = users.findIndex(user => user.userEmail === signUpUserEmail.value);
            if(indexUserName != -1) {
                UiSignUp.showAlert('Username is already exist', 'danger');
            } else if(indexUserEmail != -1) {
                UiSignUp.showAlert('Email is already exist', 'danger');
            } else {
                let name = signUpUserName.value;
                let email = signUpUserEmail.value;
                let password = signUpUserPassword.value;
                let params = "signUpUserName="+name+"&signUpUserEmail="+email+"&signUpUserPassword="+password;
                let xhr = new XMLHttpRequest();
                xhr.open('POST', 'signUp.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (this.status === 200) {
                        if(this.responseText === 'falseEmail') {
                            UiSignUp.showAlert('Invalid Email', 'danger');
                        } else {
                            UiSignUp.showAlert('Account is created please back to login', 'success');
                            UiSignUp.clearFields();
                        }
                    }
                }
                xhr.send(params);
            }
        })
        .catch(error => console.log(error));
    }
});
