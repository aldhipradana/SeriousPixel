function success_add(x) {
    Swal.fire({
        title: "Selamat !", 
        text: "Berhasil Menambahkan Data", 
        type: "success", 
        confirmButtonText: "Oke, Lanjutkan !"
    }).then((deleted) => {
        if (deleted) {
            window.location.href = x;
        }
    });
}
function fail_add(x) {
    Swal.fire({
        title: "Maaf !", 
        text: "Gagal Menambahkan Data", 
        type: "error", 
        confirmButtonText: "Coba Lagi"
    }).then((deleted) => {
        if (deleted) {
            window.location.href = x;
        }
    });
}
function success_update(x) {
    Swal.fire({
            title: "Selamat !", 
            text: "Berhasil Mengubah Data", 
            type: "success", 
            confirmButtonText: "Oke, Lanjutkan !"
    }).then((deleted) => {
        if (deleted) {
            window.location.href = x;
        }
    });
}
function fail_update(x) {
    Swal.fire({
            title: "Maaf !", 
            text: "Gagal Mengubah Data", 
            type: "error", 
            confirmButtonText: "Coba Lagi"
    }).then((deleted) => {
        if (deleted) {
            window.location.href = x;
        }
    });
}
function success_delete(x) {
    Swal.fire({
        title: "Selamat !",
        text: "Berhasil Menghapus Data",
        type: "success",
        confirmButtonText: "Oke, Lanjutkan !"
    }).then((deleted)=>{
        if(deleted){
            window.location.href = x;
        }
    });
}
function fail_delete() {
    Swal.fire({
        title: "Maaf !",
        text: "Gagal Menghapus Data",
        type: "error",
        confirmButtonText: "Coba Lagi"
    }).then((deleted) => {
        if (deleted) {
            window.location.href = x;
        }
    });
}
function session_out() {
    Swal.fire({
        title: "Waktu Sesi Anda Habis !",
        text: "Silahkan untuk login kembali",
        type: "info",
        confirmButtonText: "Login Kembali "
    }).then(function () {
        window.location.href = "login.php";
    });
}
function login_alert() {
    Swal.fire({
        title: "Peringatan !",
        text: "Anda Belum Memiliki Sesi Login",
        type: "warning",
        confirmButtonText: "Login"
    }).then(function(){
        window.location.href = "login.php";
    });
}
function no_access() {
    Swal.fire({
        title: "Peringatan !",
        text: "Anda Tidak Memiliki hak akses",
        type: "warning",
        confirmButtonText: "Login"
    }).then(function(){
        window.location.href = "index.php?page=dashboard";
    });
}
function login_index(x) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    Toast.fire({
        type: 'success',
        title: 'Selamat Datang, '+ x
    });
    console.log(x);
}