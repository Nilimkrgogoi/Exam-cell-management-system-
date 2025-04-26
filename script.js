// Open the signup form
function openSignupForm() {
    document.getElementById("signupForm").style.display = "block";
}

// Close the signup form when the user clicks on (x) button
function closeSignupForm() {
    document.getElementById("signupForm").style.display = "none";
}

// Open the login form
function openloginForm() {
    document.getElementById("signupForm").style.display = "block";
}

// Close the signup form when the user clicks on (x) button
function closeloginForm() {
    document.getElementById("signupForm").style.display = "none";
}
$(".info-item .btn").click(function(){
    $(".container").toggleClass("log-in");
  });
  $(".container-form .btn").click(function(){
    $(".container").addClass("active");
  });
