// JavaScript Document

window.addEventListener('load', function(){
	"use strict";
	
	let userInput;
	
	document.querySelector('#test').addEventListener('keyup', function(){
		userInput = document.querySelector('#test').value;	
		console.log(userInput);
	});
});