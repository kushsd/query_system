<?php
$db1=mysqli_connect("localhost","akeshjai_dbu", "sms123","newweb");

$query_sql = "SELECT * FROM `dev_query` ORDER BY id DESC";
$dev_query = mysqli_query($db1, $query_sql);
$num_row = mysqli_num_rows($dev_query);
#echo "<div>Query $num_row start</div>";
while ($dev_row = $dev_query->fetch_assoc()) {
#while ($dev_row = mysqli_fetch_assoc($dev_query)) {
		$id = $dev_row['id'];
    $query = $dev_row['query'];
    $loc = $dev_row['loc'];
    $code = $dev_row['code'];
    $soln = $dev_row['soln'];
    echo "<div class='note mb-2 container ' id='$id'>".
    "<div class='noteheader' id='$note_id'><div class='row'>".
    	"<div class='col-md-10'>".
	    	"<div class=''>  <div class='text-info'><div class='badge badge-primary'>$id</div> $query</div></div>".
	    	"<div class=''>  <div class='text-secondary'>$code  <small class='badge badge-dark'>$loc</small>  </div>  </div>".
	    	"<div class=''>  <div class='text-success'>$soln</div></div>".
	  	"</div>".
	    "<div class='col-md-2 mt-1'>"."<div class='btn-sm btn-danger d-flex del_query' id='$id'>delete</div>"."</div>".
    "</div></div>".
    "</div>";
}
/*while ($dev_query ) {  
    $id = $row['id'];
    $query = $row['query'];
    $loc = $row['loc'];
    $code = $row['code'];
    $soln = $row['soln'];
           
    echo "<div class='note'>
    <div class='col-xs-5 col-sm-3 delete'>
        <button class='btn-lg btn-danger' style='width:100%'>delete</button>
    
    </div>
    <div class='noteheader' id='$note_id'>
        <div class='text'>$query</div>
        <div class='text'>$code</div>
        <div class='timetext'>$loc</div> 
        <div class='soln'>$soln</div>   
    </div>
</div>";
}*/


#echo '<div class="alert alert-warning">You have not created any notes yet!</div>'; 
    

?>