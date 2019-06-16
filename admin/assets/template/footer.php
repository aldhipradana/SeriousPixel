<!-- This is Footer -->
<?php
// ngetest
echo "<script>msg();</script>";
?>
<!-- Footer Ends here! -->
</div>
</div>
</div>
</section>

<script src="..\assets\js\jquery.min.js"></script>
<script src="..\assets\js\jquery.easeScroll.js"></script>
<script src="..\assets\js\jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
$('#myTable').DataTable();
});
</script>

<script>
jQuery(document).ready(function ($) {
$('#sidebar-left .mobile-nav a').click(function (e) {
$("ul.menu").slideToggle();
});
});
</script>