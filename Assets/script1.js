var button = document.getElementById("homenav");

button.onclick = function(){
   alert("You have not Logged-in!\n You must Login first.");
   location.replace("login.php");
}