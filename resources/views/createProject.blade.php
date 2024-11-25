<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Project</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0b0b45;
            /* Deep blue background */
            color: #fff;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
        }

        /* Navbar Styles */
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .navbar-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 5rem;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .dp {
            background-color: #fff;
            color: #0b0b45;
            font-weight: bold;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
        }

        .admin-name {
            font-size: 1.2rem;
            margin: 0;
        }

        .dashboard-btn {
            font-size: 1rem;
            background-color: #fff;
            color: #0b0b45;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            margin-right: 5rem;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .language-title {
            font-size: 1rem;
            margin: 0;
        }

        .language-value {
            background-color: #fff;
            color: #0b0b45;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            margin: 0;
            font-size: 0.9rem;
        }

        /* Form Styles */
        .form-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .create-project-form {
            background-color: #fff;
            color: #0b0b45;
            border-radius: 20px;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #0b0b45;
        }

        .input-field {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 20px;
            background-color: #0b0b45;
            color: #fff;
            text-align: center;
            font-size: 1rem;
        }

        .create-btn {
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 20px;
            background-color: #0b0b45;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .create-btn:hover {
            background-color: #fff;
            color: #0b0b45;
            border: 2px solid #0b0b45;
        }

        @include('style')
    </style>
</head>

<body>
    <!-- Add Navbar -->
    @include('navbar')
    <!-- End Navbar -->
    <main class="main-container">
        <!-- Navbar -->
        <header class="navbar">
            <div class="navbar-left">
                <!-- DP and Admin Details -->
                <div class="admin-info">
                    <div class="dp">DP</div>
                    <h1 class="admin-name">Admin User</h1>
                </div>
                <div class="dashboard">
                    <h1 class="dashboard-btn">Dashboard</h1>
                </div>
            </div>
            <!-- Language Selector -->
            <div class="navbar-right">
                <div class="language-selector">
                    <h2 class="language-title">Language</h2>
                    <p class="language-value">Eng</p>
                </div>
            </div>
        </header>

        <!-- Create Project Form -->
        <section class="form-container">
            <form class="create-project-form" action="">
                <h1 class="form-title">Create Project</h1>
                <input type="text" class="input-field" placeholder="Project Name" />
                <input type="text" class="input-field" placeholder="Project Description" />
                <input type="text" class="input-field" placeholder="Project Budget" />
                <input type="text" class="input-field" placeholder="Project Deadline" />
                <button class="create-btn" type="submit">Create</button>
            </form>
        </section>
    </main>
</body>

</html>
<script>
    function navigateToPage(value) {
        if (value) {
            window.location.href = value; // Redirect to the selected page
        }
    }
</script>