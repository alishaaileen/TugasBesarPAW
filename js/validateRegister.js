function cekAll() {
    if (
        cekNama() === false ||
        cekUsername() === false ||
        cekEmail() === false ||
        cekNoTelp() === false ||
        cekTglLahir() === false ||
        cekGender() === false ||
        cekPassword() === false
    ) {
        return false
    }

    return true
}

function cekNama() {
    var re = /^[a-zA-Z\s]*$/
    nama = document.getElementsByName('nama_user')[0]
    danger = document.getElementsByClassName('nama_user')

    danger[0].style.display = "none";
    nama.classList.remove('is-danger')

    if(nama.value === "" || re.test(nama.value) === false) {
        danger[0].style.display = "block"
        nama.classList.add('is-danger')
        nama.focus()
        return false
    }
    else
        return true
}

function cekUsername() {
    username = document.getElementsByName('username')[0]
    danger = document.getElementsByClassName('username')

    danger[0].style.display = "none";
    username.classList.remove('is-danger')

    if(username.value === "") {
        danger[0].style.display = "block"
        username.classList.add('is-danger')
        username.focus()
        return false
    }
    else
        return true
}

function cekEmail() {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    email = document.getElementsByName('email')[0]
    danger = document.getElementsByClassName('email')

    danger[0].style.display = "none";
    email.classList.remove('is-danger')

    if(email.value === "" || re.test(email.value) === false) {
        danger[0].style.display = "block"
        email.classList.add('is-danger')
        email.focus()
        return false
    }
    else
        return true
}

function cekNoTelp() {
    var re = /\(?(?:\+62|62|0)(?:\d{2,3})?\)?[ .-]?\d{2,4}[ .-]?\d{2,4}[ .-]?\d{2,4}/
    no_telp = document.getElementsByName('no_hp')[0]
    danger = document.getElementsByClassName('no_hp')

    danger[0].style.display = "none";
    no_telp.classList.remove('is-danger')

    if(no_telp.value === "" || re.test(no_telp.value) === false) {
        danger[0].style.display = "block"
        no_telp.classList.add('is-danger')
        no_telp.focus
        return false
    }
    else
        return true
}

function cekTglLahir() {
    tgl_lahir = document.getElementsByName('tgl_lahir')[0]
    danger = document.getElementsByClassName('tgl_lahir')

    danger[0].style.display = "none";
    tgl_lahir.classList.remove('is-danger')

    if(tgl_lahir.value === "") {
        danger[0].style.display = "block"
        tgl_lahir.classList.add('is-danger')
        tgl_lahir.focus()
        return false
    }
    else
        return true
}

function cekGender() {
    jenis_kelamin = document.getElementsByName('jenis_kelamin')
    danger = document.getElementsByClassName('jenis_kelamin')

    danger[0].style.display = "none";
    jenis_kelamin.classList.remove('is-danger')

    if(jenis_kelamin.value === "") {
        danger[0].style.display = "block"
        jenis_kelamin.classList.add('is-danger')
        jenis_kelamin.focus()
        return false
    }
    else
        return true
}

function cekPassword() {
    password = document.getElementsByName('password')[0]
    danger = document.getElementsByClassName('password')

    danger[0].style.display = "none";
    password.classList.remove('is-danger')

    if(password.value === "") {
        danger[0].style.display = "block"
        password.classList.add('is-danger')
        password.focus()
        return false
    }
    else
        return true
}