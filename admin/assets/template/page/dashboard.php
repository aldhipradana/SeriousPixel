<!-- This is Content-Area -->

<div class="column column-container">
    <div id="content">
        <div class="label-dashboard">
            Your Dashboard
        </div>
        <div class="row content-dashboard">
            <div class="column_1_3">
                <div class="content-dashboard-container">
                    <div class="content-label-dashboard">
                        Total Views
                    </div>
                    <div class="content-dashboard">
                        <div class="image-content-dashboard">
                            <img src="assets/images/Admin-Computer.png"></div>
                            <div class="number-content-dashboard">
                                <div class="count"><?php 
                                echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM spviewcount"));
                                ?></div>
                                <div class="label">Total Views</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="column_1_3">
                    <div class="content-dashboard-container">
                        <div class="content-label-dashboard">
                            Total Photo
                        </div>
                        <div class="content-dashboard">
                            <div class="image-content-dashboard">
                                <img src="assets/images/Admin-Camera.png"></div>
                                <div class="number-content-dashboard">
                                    <div class="count"><?=mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(IdGallery) FROM spgallery"))[0];?></div>
                                    <div class="label">Total Photo</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="column_1_3">
                        <div class="content-dashboard-container">
                            <div class="content-label-dashboard">
                                Total Gallery
                            </div>
                            <div class="content-dashboard">
                                <div class="image-content-dashboard">
                                    <img src="assets/images/Admin-Gallery.png"></div>
                                    <div class="number-content-dashboard">
                                        <div class="count"><?=mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(Count) from (select spgallery.IdCategory as Count from spgallery group by IdCategory) as Count"))[0];?>
</div>
                                        <div class="label">Total Photo</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row content-dashboard">
                        <div class="content-dashboard-container">
                            <div class="column">
                                <div class="label-dashboard">
                                    Posting Populer
                                </div>
                                <div class="dashboard-content">
                                    <ul class="post">
                                        <li>
                                            <a href="#">1.&nbsp;Lorem Ipsum Dolor</a>
                                            <span>999 Views</span>
                                        </li>
                                        <li>
                                            <a href="#">2.&nbsp;Lorem Ipsum Dolor</a>
                                            <span>999 Views</span>
                                        </li>
                                        <li>
                                            <a href="#">3.&nbsp;Lorem Ipsum Dolor</a>
                                            <span>999 Views</span>
                                        </li>
                                    </ul>

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