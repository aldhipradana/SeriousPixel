function success_add() {
    Swal.fire({
        title: "Selamat !", 
        text: "Berhasil Menambahkan Data", 
        type: "success", 
        confirmButtonText: "Oke, Lanjutkan !"
    });
}
function fail_add() {
    Swal.fire({
        title: "Maaf !", 
        text: "Gagal Menambahkan Data", 
        type: "error", 
        confirmButtonText: "Coba Lagi"
    });
}
function success_update() {
    Swal.fire({
            title: "Selamat !", 
            text: "Berhasil Mengubah Data", 
            type: "success", 
            confirmButtonText: "Oke, Lanjutkan !"
        });
}
function fail_update() {
    Swal.fire({
            title: "Maaf !", 
            text: "Gagal Mengubah Data", 
            type: "error", 
            confirmButtonText: "Coba Lagi"
        });
}
function success_delete() {
    Swal.fire({
        title: "Selamat !",
        text: "Berhasil Menghapus Data",
        type: "success",
        confirmButtonText: "Oke, Lanjutkan !"
    });
}
function fail_delete() {
    Swal.fire({
        title: "Maaf !",
        text: "Gagal Menghapus Data",
        type: "error",
        confirmButtonText: "Coba Lagi"
    });
}

function login_alert() {
    Swal.fire({
        title: "Peringatan !",
        text: "Anda Belum Memiliki Sesi Login",
        type: "warning",
        confirmButtonText: "Login"
    }).then(function(){
        // alert("kampret");
        window.location.href = "login.php";
    });
}

function login_index() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    Toast.fire({
        type: 'success',
        title: 'Berhasil Login'
    });
}