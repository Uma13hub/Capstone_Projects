<?php
$pid= $row['post_id'];
$pst= $row['post_status'];
echo '<div class="shadow post">';
echo '<div style="display: flex;justify-content: space-between;">';
echo '<div><i class="fa-2x fa-solid fa-user"></i>';
echo '<a style="font-size: 24px; font-weight:bold; color:black; margin-left:15px;" class="profilelink" href="profile.php?id=' . $row['user_id'] .'">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a></div>';
echo '<div><p >Status : <span class="text-success status">' . $pst . '</span></p>
      <p class="posted-time"><span>' . $row['post_time'] . '</span></p></div>';
echo'</div>';
echo '<hr>';
echo '<p class="caption">' . $row['post_caption'] . '</p>';
echo '<center>'; 
$target = glob("posts/" . $row['post_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '" style="max-width:580px">'; 
    echo '<br><br>';
}
echo '</center>';
?>
<?php echo '<div><i class="fa-lg fa-regular fa-thumbs-up"></i></div> <p>' . $row['post_count'] . '</p>
<p style="font-weight:bold">Reports raised : '. $row['reports_count'] .'</p>';
echo '
<p>Comments :</p>
<p style="padding:15px; border-style: solid; border-width: 1px;border-color: lightgray;" id="unordered">
    ';
$cm= explode("*", $row['comments'] );
foreach($cm as $x=>$val){
    echo "$val<br>";
}

echo'
</p>
';?>
<form  method="post" onsubmit="return true">
<label class="ml-1">Change the Status</label>
<?php
echo '
    <input class="d-none" type="text" name="postid" value=' . $pid . '>
    <button class="btn btn-success" type="submit" name="st">Verified</button>
    <button class="btn btn-danger" type="submit" name="del">Delete</button>
</form>

</div>';
?>
