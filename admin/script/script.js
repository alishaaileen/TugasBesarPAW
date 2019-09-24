function hamburgerFunc() {
    document.getElementById('sidebar').classList.toggle("animationSideBar")
    document.getElementById('navbar').classList.toggle("animationNavbar")
    document.getElementById('dashboardData').classList.toggle("animationDashboardData")
}

function dropdownToggle() {
    document.getElementById('dropdown').classList.toggle("is-active")
}

function cekAllInput() {
    if(cekNama() === false) {
        return false;
    }
    else if(cekGender() === false) {
        return false;
    }
    else if(cekEmail() === false) {
        return false;
    }
    else if(cekTglLahir() === false) {
        return false
    }
    else if(cekNoTelp() === false) {
        return false;
    }
    return true;

}

function cekNama() {
    var nama = document.getElementsByName('nama')[0].value;
    var re = /^[a-zA-Z\s]*$/

    if(nama === "") {
        alert("Nama tidak boleh kosong!")
        return false
    }
    else if(re.test(nama) === false) {
        alert("Masukan nama yang valid!")
        return false
    }
    return true
}

function cekEmail() {
    var email = document.getElementsByName('email')[0].value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

    if(email === "") {
        alert("Email tidak boleh kosong!")
        return false
    }
    else if(re.test(email) === false) {
        alert("Masukan e-mail yang valid!")
        return false
    }
    return true
}

function cekNoTelp() {
    var noTelp = document.getElementsByName('noTelp')[0].value;
    // var re = /^[0-9]*$/
    var re = /\(?(?:\+62|62|0)(?:\d{2,3})?\)?[ .-]?\d{2,4}[ .-]?\d{2,4}[ .-]?\d{2,4}/

    if(noTelp === "") {
        alert("Nomor Telepon tidak boleh kosong!")
        return false
    }
    else if(re.test(noTelp) == false) {
        alert("Masukan Nomor Telepon yang valid!")
        return false
    }
    return true
}

function cekGender() {
    var radButton = document.forms['dataPegawai']['gender']

    for(var i = 0; i < radButton.length; i++) {
        if (radButton[i].checked)
            return true
    }

    alert("Harap pilih gender!")
    return false
}

function cekTglLahir() {
    var tglLahir = document.forms['dataPegawai']['tglLahir'].value

    if(tglLahir === "") {
        alert("Tanggal Lahir harus diisi!")
        return false
    }
    return true;
}