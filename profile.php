<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <style>
    /* Basic CSS for styling */
    body {
      font-family: Arial, sans-serif;
    }
    .profile-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .profile-picture {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
    }
    .profile-details {
      margin-bottom: 20px;
    }
    .profile-details label {
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="profile-container">
  <h1>User Profile</h1>
  <img src="icon.png" alt="Profile Picture" class="profile-picture">
  
  <div class="profile-details">
    <label for="username">Username:</label>
    <span id="username">nirmiti</span>
  </div>
  
  <div class="profile-details">
    <label for="email">Email:</label>
    <span id="email">nirmiti@example.com</span>
  </div>
  
  <button> <a href="welcome.html">sign out </a> </button>
</div>

</body>
</html>
