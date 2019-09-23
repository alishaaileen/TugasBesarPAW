function cekPasswordChange() {
    if (
        cekOldPassword() === false ||
        cekNewPassword() === false ||
        cekConfirmPassword() === false 
    ) {
        return false
    }
    return true
}


function cekOldPassword() {
    old_password = document.getElementsByName('old_password')[0]
    danger = document.getElementsByClassName('old_password')

    danger[0].style.display = "none";
    old_password.classList.remove('is-danger')

    if(old_password.value === "") {
        danger[0].style.display = "block"
        old_password.classList.add('is-danger')
        old_password.focus()
        return false
    }
    else
        return true
}

function cekNewPassword() {
    new_password = document.getElementsByName('new_password')[0]
    danger = document.getElementsByClassName('new_password')

    danger[0].style.display = "none";
    new_password.classList.remove('is-danger')

    if(new_password.value === "") {
        danger[0].style.display = "block"
        new_password.classList.add('is-danger')
        new_password.focus()
        return false
    }
    else
        return true
}


function cekConfirmPassword() {
    confirm_password = document.getElementsByName('confirm_password')[0]
    danger = document.getElementsByClassName('confirm_password')

    danger[0].style.display = "none";
    confirm_password.classList.remove('is-danger')

    if(confirm_password.value === "") {
        danger[0].style.display = "block"
        confirm_password.classList.add('is-danger')
        confirm_password.focus()
        return false
    }
    else
        return true
}