<?php

session_start();

// Login না করলে Dashboard-এ ঢুকতে পারবে না
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/login.php");
    exit();
}

$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];
$phonenumber = $_SESSION['phonenumber'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6fb;
        }

        /* Navbar */

        .navbar {
            width: 100%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;

            padding: 18px 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            font-size: 24px;
        }

        .logout-btn {
            text-decoration: none;
            background: white;
            color: #667eea;

            padding: 10px 18px;

            border-radius: 8px;

            font-weight: bold;

            transition: 0.3s;
        }

        .logout-btn:hover {
            background: #eeeeee;
        }

        /* Main */

        .container {
            width: 90%;
            max-width: 1100px;

            margin: 40px auto;
        }

        .welcome {
            background: white;

            padding: 30px;

            border-radius: 15px;

            box-shadow: 0 10px 30px rgba(0,0,0,0.08);

            margin-bottom: 30px;
        }

        .welcome h1 {
            color: #333;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #777;
        }

        /* Cards */

        .cards {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }

        .card {
            background: white;

            padding: 25px;

            border-radius: 15px;

            box-shadow: 0 10px 30px rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #667eea;

            margin-bottom: 10px;
        }

        .card p {
            color: #555;

            word-break: break-word;
        }

        /* Responsive */

        @media (max-width: 768px) {

            .navbar {
                padding: 15px 20px;
            }

            .navbar h2 {
                font-size: 20px;
            }

            .container {
                width: 92%;
                margin: 25px auto;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .welcome {
                padding: 22px;
            }

        }

    </style>

</head>

<body>

    <!-- Navbar -->

    <nav class="navbar">

        <h2>Admin Dashboard</h2>

        <a href="logout.php" class="logout-btn">
            Logout
        </a>

    </nav>


    <!-- Main Content -->

    <div class="container">

        <div class="welcome">

            <h1>
                Welcome, <?php echo htmlspecialchars($fullname); ?>! 👋
            </h1>

            <p>
                You are successfully logged in to your dashboard.
            </p>

        </div>


        <!-- User Cards -->

        <div class="cards">

            <div class="card">

                <h3>👤 Full Name</h3>

                <p>
                    <?php echo htmlspecialchars($fullname); ?>
                </p>

            </div>


            <div class="card">

                <h3>📧 Email</h3>

                <p>
                    <?php echo htmlspecialchars($email); ?>
                </p>

            </div>


            <div class="card">

                <h3>📱 Phone Number</h3>

                <p>
                    <?php echo htmlspecialchars($phonenumber); ?>
                </p>

            </div>

        </div>

    </div>

</body>

</html>