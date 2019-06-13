<?php   
echo "kampret";
function create(){

}

function read($con, $sql){
    $query  = mysqli_query($con, $sql);
    return $query;
}
?>