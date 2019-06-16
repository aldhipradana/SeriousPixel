<!-- This is Content-Area -->
<?php 
    // Use Code below if category was created
    // $catSql = "SELECT * FROM spcategory ORDER BY NamaCategory ASC";
    // $loadCatg = mysqli_query($con, $catSql);
    $getId = $_GET['IdGallery'];
    $queryData = "SELECT * FROM spgallery WHERE IdGallery=$getId";
    $loadSql = mysqli_query($con, $queryData);
    $gallery = mysqli_fetch_array($loadSql);
    if(isset($_POST['submit'])){
        $title  = $_POST['title'];
        $desc  = $_POST['description'];
        $idCat  = $_POST['category'];

        // Image Setting and Check
        $dir   = getcwd()."/assets/images/gallery/";
        if (!file_exists($dir)) {
            mkdir($dir, 007, true);
        }else{
            echo "<script> alert(\"File already exists.\"); </script>";
        }
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $file = $dir . basename($_FILES["fileToUpload"]["name"]);
        $oldFile = $dir . $gallery['Gambar'];
        $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        if(isset($fileName) && $fileName !== "" && $fileName !== null){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                if (file_exists($file)) {
                    echo "<script> alert(\"File already exists.\"); </script>";
                }else{
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
                        unlink($oldFile);
                        $query = "UPDATE `spgallery` SET    `IdCategory`='$idCat',
                                                            `Gambar`='$fileName',
                                                            `Title`='$title',
                                                            `Description`='$desc' WHERE IdGallery=$getId";
                        $sql = mysqli_query($con, $query);
                        if($sql){
                            echo "<script> success(); </script>";
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
    }
?>
<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Update Gallery
        </div>

        <div class="row content-dashboard">
            <div class="column">
                <div class="content-dashboard-container">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="label-form">Title</label>
                            <input type="text" placeholder="Title" name="title" class="input-form" value="<?php echo $gallery['Title']; ?>"></div>
                        <div class="form-group custom-select">
                            <label class="label-form">Category</label>
                            <select name="category" > 
                                <option value="1">Bagus</option>
                                <option value="2">Jelek</option>
                                <!-- Use code below if category was created -->
                                <?php //foreach($loadCatg as $catData){ ?>
                                <!-- <option value="<?php //echo $catData['IdCategory'];?>"><?php //echo $catData['NamaCategory'];?></option> -->
                                <?php //} ?>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Description</label>
                            <textarea name="description" class="input-form" palaceholder="Description"><?php echo $gallery['Description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="label-form">Select Your File</label>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Update Data">
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