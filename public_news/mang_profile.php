<?php
$pid= $row['post_id'];
$pst= $row['post_status'];
echo '<div class="shadow post">';
echo '<div style="display: flex;justify-content: space-between;">';
echo '<div><i class="fa-2x fa-solid fa-user"></i>';
echo '<a style="font-size: 24px; font-weight:bold; color:black; margin-left:10px;" class="profilelink" href="profile.php?id=' . $row['user_id'] .'">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a></div>';
echo '<div>
        <form method="post" onsubmit="return true">
            <input class="d-none" type="text" name="postid" value=' . $pid . '>
            <button class="btn btn-danger mb-2" type="submit" name="del">Delete</button>
        </form>
        <p>Status : <span class="text-success status">' . $pst . '</span></p>
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
<button id="likeBtn" type="submit" name="like" style="border-style:none"><?php echo '<i class="fa-lg fa-regular fa-thumbs-up"></i></button> <p>' . $row['post_count'] . '</p>';
echo '
<ul style=" padding:15px; border-style: solid; border-width: 1px;border-color: lightgray;" class="d-none" id="unordered">
</ul>

</div>';