//comment box
var likeBtn= document.getElementById("likeBtn");


var post= document.getElementById("comments");
var comment_box = document.getElementById("unordered");
let x=0;
console.log(post);
console.log(comment_box);
post.addEventListener("click", function(){
    x=1;
    console.log("commented");
    
    comment_box.classList.remove("d-none");
    
    var commentBoxValue= document.getElementById("comment-box").value;
    var li = document.createElement("li");
    var text = document.createTextNode(commentBoxValue);
    li.appendChild(text);
    document.getElementById("unordered").appendChild(li);
});