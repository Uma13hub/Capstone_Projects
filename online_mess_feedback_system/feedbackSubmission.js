

let feedbackCon=document.getElementById("sectionFeedback");
let feedbackForm=document.getElementById("feedbackForm");

feedbackForm.classList.add("d-none");
let feedbackMsg=document.createElement("p");
feedbackCon.appendChild(feedbackMsg);
feedbackMsg.textContent="Your feedback on today's food items submitted successfully."