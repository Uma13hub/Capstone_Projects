<?php
$pid= $row['post_id'];
$pst= $row['post_status'];
echo '<div class="shadow post">';
echo '<div style="display: flex;justify-content: space-between;">';
echo '<div style="display:flex; align-items:center;"><i class="fa-lg fa-solid fa-user"></i>';
echo '<p class="ml-2 mt-3" style="font-size:26px; font-weigth:bold;">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '</p></div>';
echo '<div><p class="ml-2">Status : <span class="text-success status">' . $pst . '</span></p>
<p class="posted-time"><span>' . $row['post_time'] . '</span></p></div>';
echo'</div>';
echo '<hr>';    
echo '<div class="mb-2" style="display: flex; jutify-content:space-evenly;"><div style="background-color:#e6ebea;width=60% !important; flex-grow:1; border-style:solid; border-radius:5px;
border-width:0px; "><p class="caption">' . $row['post_caption'] . '</p></div>';
echo '<div style="width=40% !important;flex-shrink:1;">'; 
$target = glob("posts/" . $row['post_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '" style="width:400px; height:100%;">'; 
    echo '<br><br>';
}
echo '</div></div>
<form method="post" onsubmit="return true">
<button id="likeBtn" type="submit" name="like" value="' . $row['post_id'] .'" style="border-style:none" name="like"><i class="fa-lg fa-regular fa-thumbs-up"></i></button>
<button id="disLikeBtn" type="submit" name="dislike" value="' . $row['post_id'] .'" style="border-style:none"><i class="fa-lg fa-regular fa-thumbs-down"></i></button>
<button class="btn btn-danger" id="report" type="submit" name="rep" value="' . $row['post_id'] .'" style="border-style:none">Report</button></form> <p>' . $row['post_count'] . '</p>
<p id="repMsg"></p>';
echo '
<form method="post" onsubmit="return true">
<input name="comment" type="text" id="comment-box" placeholder="Enter comment">
<button name="comm" value="' . $row['post_id'] .'" type="submit" class="btn btn-primary" id="comments">Post</button>
</form>
<p style="margin-top:15px; padding:15px; border-style: solid; border-width: 1px;border-color: lightgray;" id="unordered">
    ';
$cm= explode("*", $row['comments'] );
foreach($cm as $x=>$val){
    echo "$val<br>";
}

echo'
</p>
</div>
';