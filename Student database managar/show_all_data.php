<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Cards</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
        }
        .card {
            background-color: #1f1f1f;
            border: none;
            border-radius: 10px;
        }
        .card .card-img-top {
            width: 70px;
            height: 70px;
            background: #2b2b2b;
            border-radius: 100%;
            margin: 20px auto 0;
        }
        .card-title {
            font-weight: 600;
            text-align: center;
            margin-top: 10px;
            font-size: 1.3em;
            color: #ffffff;
        }
        .card-text {
            font-weight: 400;
            text-align: center;
            font-size: 1em;
            margin-top: 5px;
            color: #b0b0b0;
        }
        .card button {
            padding: 8px 25px;
            border-radius: 8px;
            border: none;
            background: #3a3a3a;
            color: #ffffff;
            font-weight: 600;
        }
        .card button:hover {
            background: #ffffff;
            color: #212121;
        }
    </style>
</head>
<body>
  <?php include_once'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <?php
            // Database connection
            $link = mysqli_connect("localhost", "root", "", "stu_data");
            $qry = "SELECT * FROM students;";
            $resultset = mysqli_query($link, $qry);

            // Fetch data from database
            while ($row = mysqli_fetch_assoc($resultset)) {
                $name = $row['stu_name'];
                $email = $row['stu_email'];
                $age = $row['stu_age'];
                $mob = $row['stu_mob'];
                $course = $row['stu_course'];
                $percent = $row['stu_10_per'];
                $img = $row['stu_img_link'];
                $roll = $row['id'];
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-4">
                    <img src="<?php echo $img; ?>" class="card-img-top" alt="Student Image">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $name; ?></h5>
                        <p class="card-text">Roll No: <?php echo $roll; ?><br>
                        <?php echo $course; ?><br>
                        <!-- Age: <?php echo $age; ?> -->
                        </p>
                        <button class="btn">More details</button>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
