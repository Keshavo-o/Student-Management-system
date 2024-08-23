<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Student Portal</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #343a40;
            color: #f8f9fa;
        }

        /* .navbar {
            background-color: #212529;
        } */

        .card {
            background-color: #495057;
            border: none;
        }

        .card-body {
            color: #f8f9fa;
        }

        footer {
            background-color: #212529;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
     <?php include_once'navbar.php'; ?>
    <!-- Main Content -->
    <main class="container mt-5">
        <header class="text-center mb-4">
            <h1>Welcome to the Student Portal</h1>
            <p class="lead">Your one-stop solution for managing student details.</p>
        </header>

        <section class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Student</h5>
                        <p class="card-text">Quickly add new student details to the system.</p>
                        <a href="add_data_in_database.php" class="btn btn-primary">Add Student</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Students</h5>
                        <p class="card-text">View and manage existing student details.</p>
                        <a href="show_all_data.php" class="btn btn-primary">View Students</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <p class="card-text">Get in touch with us for any inquiries or support.</p>
                        <a href="about.php" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-light text-center py-3 mt-5">
        <p>&copy; 2024 Student Portal. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
