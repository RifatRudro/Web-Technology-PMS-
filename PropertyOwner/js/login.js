"use strict"
function validateEmail()
{	
	let email=document.getElementById('email').value;
	let emailMsg=document.getElementById('emailMsg');
	console.log(email);
	if (email=="") 
	{
		emailMsg.innerHTML="⚠️Email can not be empty";
		return false;
	}
	else if (email.indexOf("@") === -1) {
		emailMsg.innerHTML="⚠️email doesn't have @ character";
		return false;
	}
	else {
		emailMsg.innerHTML="✅ okay";
		return true;

	}
	}


	function validatePassword()
{
	let password=document.getElementById('password').value;
	let passwordMsg=document.getElementById('passwordMsg');

	if (password=="") 
	{
		passwordMsg.innerHTML="⚠️password can not be empty";
		return false;
	}
	else if (password.length<8) 
	{	
		passwordMsg.innerHTML="⚠️password must be atleast 8 chars";
		return false;
	}

	else {
		passwordMsg.innerHTML="✅ okay";
		return true;

	}


	}