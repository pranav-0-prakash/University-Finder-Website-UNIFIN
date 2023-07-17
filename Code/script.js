const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
	event.preventDefault();
	const name = form.elements['name'].value;
	const email = form.elements['email'].value;
	const message = form.elements['message'].value;

	// Send form data to server using AJAX or other method
	// ...

	// Clear form fields
	form.reset();

	alert(`Thank you for your message, ${name}!`);
});


// Set the text of the email address element
emailElement.textContent = "Email: " + emailAddress;
// Get the phone number input element
var phoneElement = document.getElementById("phone");

// Add an event listener to the form on submit
document.getElementById("contact-form").addEventListener("submit", function(event) {
	// Get the phone number input value
	var phoneValue = phoneElement.value;

	// Use a regular expression to validate the phone number in Indian format
	if (!/^[6-9]\d{9}$/.test(phoneValue)) {
		// If the phone number is invalid, prevent the form from submitting
		event.preventDefault();
		alert("Please enter a valid phone number in Indian format (10 digits, starting with 6, 7, 8, or 9).");
	}
});



