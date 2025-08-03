<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title>EZPC Login</title>
    
    <!-- ICON LOGO -->
    <link rel="shortcut icon" type="x-icon" href="./public_images/LogoTag-ezpc.png">

    <link rel="icon" type="image/png" href="img_PCGuide/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Resetting default margin for headings */
        h1, h2, h3, h4, h5, h6 {
            margin: 0;
        }

        /* Base font for the entire document */
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #292929; /* Dark background color */
            color: #fff; /* Light text color */
            margin: 0;
            padding: 0;
        }

        /* Header font */
        header {
            font-family: 'Cairo', sans-serif;
        }

        /* Background image for the login area */
        .contactbg {
            background-image: url('admin/uploads/bg3.jpg');
            background-size: cover;
            background-position: center;
        }

        /* Centering text */
        .text-center {
            text-align: center !important;
        }

        /* Flexbox setup for main content */
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Full viewport height */
        }

/* Styling for the login form container */
#login_data {
    width: 100%; /* Set the width to 100% */
    max-width: 800px; /* Limit the maximum width */
    border-radius: 20px;
    background-color: #1f1f1f; /* Darker background color for the form */
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Adding a subtle shadow */
    margin: 20px auto; /* Center the container horizontally */
}


        /* Styling for form inputs */
        .text-field__label {
            display: block;
            margin-bottom: 0.5rem; /* Increased space between labels */
            color: #ccc; /* Lighter label color */
        }

        .text-field__input {
            display: block;
            width: 100%;
            height: calc(2rem + 2px);
            padding: 0.375rem 0.75rem;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #fff;
            background-color: #333; /* Darker input background */
            background-clip: padding-box;
            border: 1px solid #666; /* Darker border */
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            margin-bottom: 1rem; /* Increased bottom margin */
        }

        .text-field__input::placeholder {
            color: #999; /* Lighter placeholder color */
            opacity: 0.6; /* Reduced opacity */
        }

        /* Styling for the login button */
        .LogIn_btn {
            background-color: #4CAF50; /* Green color for the button */
            border: none;
            color: white;
            padding: 0.8rem 1.5rem; /* Increased padding */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer; /* Adding pointer cursor */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .LogIn_btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        /* Media query for smaller screens */
        @media (max-width: 600px) {
            .main {
                padding: 0 20px; /* Add some horizontal padding */
            }
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <main class="main">
            <div id="login_label" class="text-center">
                <img id="pc_logo" src="images/favicon_small.png" alt = "PC_Logo">
                <h1>Login</h1>
            </div>
            <div id="login_data" class="text-center">
                <form id="login_data_form" action="login.php" method="POST">
                    <p>
                        <label class="text-field__label" for="username">Log In:</label>
                        <input class="text-field__input" placeholder="Login" type="text" name="username" id="username" required>
                    </p>
                    <p>
                        <label class="text-field__label" for="password">Password:</label>
                        <input class="text-field__input" placeholder="Password" type="password" name="password" id="password" required>
                    </p>
                    <label><input type="checkbox" name="save">Save</label>
                    <br>
                    <button class="LogIn_btn" type="submit">Send</button>
                </form>
                <p>Account: qwerty</p>
            </div>
        </main>
    </div>

</body>
</html>
