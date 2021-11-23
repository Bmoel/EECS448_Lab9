function checkForm()
{
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let num_bf = document.getElementById('bf_in').value;
    let num_hk = document.getElementById('hk_in').value;
    let num_lbc = document.getElementById('lbc_in').value;

    if(username == '' || notDomain(username)) {
        alert("Please enter a valid username (ex. name@[valid-domain].com)");
        return false;
    }
    else if(password == '') {
        alert("Please enter a password");
        return false;
    }
    else if(num_bf == '' || isNaN(num_bf) || num_bf < 0) {
        if(isNaN(num_bf)) {
            alert("Please enter a number in the copies field");
        } else {
            alert("Please enter a valid number in the text field (larger than 0)");
        }
        return false;
    }
    else if(num_hk == '' || isNaN(num_hk) || num_hk < 0) {
        if(isNaN(num_hk)) {
            alert("Please enter a number in the copies field");
        } else {
            alert("Please enter a valid number in the text field (larger than 0)");
        }
        return false;
    }
    else if(num_lbc == '' || isNaN(num_lbc) || num_lbc < 0) {
        if(isNaN(num_lbc)) {
            alert("Please enter a number in the copies field");
        } else {
            alert("Please enter a valid number in the text field (larger than 0)");
        }
        return false;
    }
    else if(!(document.getElementById('opt_1').checked || document.getElementById('opt_2').checked || document.getElementById('opt_3').checked)) {
        alert("Please select and option for the shipping");
        return false;
    }
    else {
        return true;
    }
}

function notDomain(username) {
    if(!(username.includes('@') && username.includes('.com'))) {
        return true;
    }
    let inbetween = username.substring(username.indexOf('@') + 1, username.lastIndexOf('.'));
    if(inbetween == '' || inbetween.includes('@') || inbetween.includes('.')) {
        return true;
    }
    return false;
}