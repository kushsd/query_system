<?php
$db1=mysqli_connect("localhost","akeshjai_dbu", "sms123","newweb");

$edit_id = $_POST["edit_id"];
if(empty($edit_id)) $edit_id = 1;
#echo "Edit id is $edit_id <br>";
$sql = "SELECT * FROM dev_query WHERE id=$edit_id";
#echo $sql."<br>";
$dev_query = mysqli_fetch_array(mysqli_query($db1, $sql));
#print_r($dev_query);
#echo "<br> dev query is $dev_query";
#echo json_encode($dev_query);
#print_r($dev_query);
$id = $dev_query["id"];
$query = $dev_query["query"];
$loc = $dev_query["loc"];
$code = $dev_query["code"];
$soln = $dev_query["soln"];

 #echo json_encode(array("id" => "$id", "query" => "$query", "loc" => "$loc", "code" => "$code", "soln" => "$soln"));

 /*
echo "function ed_var() {";
echo "var ed_query = '$query';";
echo "var ed_loc = '$loc';";
echo "var ed_code = '$code';";
echo "var ed_soln = '$soln';";
echo "}"; */
?>

<form method="post" id="edit_query_form">
    <h4 id="edit_status">Editing Query <div class="badge badge-primary"><?php echo "$id"; ?></div> </h4>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="edit_id">ID</label>
            <input type="text" id="edit_id" name="edit_id" class="form-control" value="<?php echo "$id"; ?>" >
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="edit_query">Query</label>
            <textarea id="edit_query" name="edit_query" class="form-control"><?php echo "$query"; ?></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="edit_code">Code</label>
            <textarea id="edit_code" name="edit_code" class="form-control"><?php echo "$code"; ?></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="edit_loc">Code-Location</label>
            <input type="text" id="edit_loc" name="edit_loc" class="form-control" value="<?php echo "$loc"; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="edit_soln">Solution</label>
            <textarea id="edit_soln" name="edit_soln" class="form-control"><?php echo "$soln"; ?></textarea>
        </div>
    </div>
    
  <button type="submit" class="btn btn-primary" id="edit_query">Update</button>
</form>