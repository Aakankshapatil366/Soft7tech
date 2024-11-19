// Add event listeners for switching forms
document.getElementById('login-btn').addEventListener('click', function () {
    showForm('login');
  });
  
  document.getElementById('signup-btn').addEventListener('click', function () {
    showForm('signup');
  });
  
  // Function to show the selected form
  function showForm(formType) {
    // Hide all forms and deactivate all buttons
    const forms = document.querySelectorAll('.form');
    const buttons = document.querySelectorAll('.form-btn');
  
    forms.forEach((form) => form.classList.remove('active'));
    buttons.forEach((button) => button.classList.remove('active'));
  
    // Show selected form and activate corresponding button
    document.getElementById(`${formType}-form`).classList.add('active');
    document.getElementById(`${formType}-btn`).classList.add('active');
  }
  
  // Handle Login form submission
  function handleLogin(event) {
    event.preventDefault();
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;
  
    console.log(`Login Attempt: ${email}, ${password}`);
    alert('Login Successful!');
  }
  
  // Handle Sign Up form submission
  function handleSignup(event) {
    event.preventDefault();
    const name = document.getElementById('signup-name').value;
    const email = document.getElementById('signup-email').value;
    const password = document.getElementById('signup-password').value;
    const phone = document.getElementById('signup-phone').value;
    const address = document.getElementById('signup-address').value;
  
    console.log(`Sign Up Details: Name: ${name}, Email: ${email}, Password: ${password}, Phone: ${phone}, Address: ${address}`);
    alert('Sign Up Successful!');
  }
  