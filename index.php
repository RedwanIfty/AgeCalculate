<!DOCTYPE html>
<html>
<head>
    <title>Calculate Age</title>
    <style>
        /* Styles to center content */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4; /* Background color */
            color: #333; /* Text color */
        }

        .container {
            text-align: center;
            background-color: #fff; /* Form background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow */
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="date"] {
            padding: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff; /* Button background color */
            color: #fff; /* Button text color */
            border: none;
            border-radius: 4px;
        }

        p {
            font-size: 18px;
            margin-top: 0;
            color: #555; /* Output text color */
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <label for="birthdate">Enter Your Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate">
            <input type="submit" value="Calculate Age">
        </form>

        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve user input from the form
            $inputDate = $_POST['birthdate'];

            // Calculate the age based on the input date
            $birthDate = new DateTime($inputDate);
            $currentDate = new DateTime();
            $age = $currentDate->diff($birthDate);

            $years = $age->y;
            $months = $age->m;
            $days = $age->d;

            echo "<p>Your age is: $years years, $months months, and $days days old</p>";
        }
        ?>
    </div>
</body>
</html>
