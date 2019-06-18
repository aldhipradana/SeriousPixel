<!-- This is Content-Area -->

<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            User
        </div>
        <div class="row content-dashboard">
            <div class="content-dashboard-container">
                <div class="column">
                    <div class="label-dashboard">
                        <?=$_SESSION['nama']?>
                    </div>
                    <div class="dashboard-content">
                        <div class="form-group">
                            <label class="label-form">
                                Username :
                            </label>
                            <?=$_SESSION['usname']?>
                        </div>
                        <div class="form-group">
                            <label class="label-form">
                                No Telp :
                            </label>
                            <?=$_SESSION['telp']?>
                        </div>
                        <div class="form-group">
                            <label class="label-form">
                                Email :
                            </label>
                            <?=$_SESSION['email']?>
                        </div>
                    </div>

                    <div class="form-group">
                        <img
                            width="200px"
                            src="assets\images\admin\<?php 
                            $dir = getcwd()."/assets/images/admin/";
                            if (isset($_SESSION['foto']) && file_exists($dir.$_SESSION['foto'])) {
                                echo $_SESSION['foto'];
                            } else {
                                echo "admin.png";
                            }
                            ?>"
                            alt="Admin Image">
                    </div>
                    <div class="form-links">
                        <a class="add" href="?page=user-add" style="border:1px solid #fff;">Tambah User Baru</a>
                        <a class="update" href="?page=user-update&IdUser=<?=$_SESSION['id']?>" style="border:1px solid #fff;">
                            Edit Data
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="label-dashboard ">
                &copy; 2019 Serious Pixel | Bali | Serious Wedding Photography
            </div>
        </div>
    </div>

    <!-- Content-Area Ends here! -->