const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function Add_product() {
	
	document.getElementById('custmer_form').style.display="block";
	document.getElementById('Add_product').style.display ="none";
	 document.getElementById('book_form').style.display = "none";
	
	
}
function custmer() {
	document.getElementById('custmer_form').style.display="none";;
	document.getElementById('Add_product').style.display ="block";
	 document.getElementById('book_form').style.display = "none";
	
}
function book() {
	document.getElementById('custmer_form').style.display="none";
	document.getElementById('Add_product').style.display ="none";
	 document.getElementById('book_form').style.display = "block";
	
}
function logout() {
	document.getElementById('custmer_form').style.display="none"
	// document.getElementById('Add_product').style.display ="none";
// 	document.getElementById('book').style.display = "none";
// 	document.getElementById('logout').style.display = "none";
	
}