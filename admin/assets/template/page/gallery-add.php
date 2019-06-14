<!-- This is Content-Area -->
<?php 
    if(isset($_POST['submit'])){
        // require "/assets/images/gallery/";
        $title  = $_POST['title'];
        $desc  = $_POST['description'];
        // $cat  = $_POST['categories'];

        // Image Setting and Check
        $dir   = getcwd()."\assets\images\gallery\ ";
        if (!file_exists($dir)) {
            mkdir($dir, 007, true);
        }else{
            echo "<script> alert(\"File already exists.\"); </script>";
        }
        $file = $dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            if (file_exists($file)) {
                echo "<script> alert(\"File already exists.\"); </script>";
            }else{
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file);
                    $query = "INSERT INTO spgallery(Gambar, Title, Description) VALUES ('$file', '$title', '$desc')";
                    $sql = mysqli_query($con, $query);
                    if($sql){
                        echo "<script> alert(\"Success\"); </script>";
                        header("Location: ?page=gallery");
                    }
                } else {
                    echo "<script> alert(\"Sorry, there was an error uploading your file.\"); </script>";
                }
            }
        } else {
            echo "<script> alert(\"File is not an image.\"); </script>";
        }
    }
?>
<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Add Gallery
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="content-dashboard-container">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="label-form">Title</label>
                            <input type="text" placeholder="Title" name="title" class="input-form"></div>
                        <div class="form-group">
                            <label class="label-form">Description</label>
                            <textarea name="Description" class="input-form" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Select Your File</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Tambah Data">
                        </div>
                    </form>
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