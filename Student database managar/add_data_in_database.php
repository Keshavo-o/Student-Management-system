<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">

    <?php
include_once 'navbar.php';
$stu_img = './images/user.png';
    extract($_REQUEST);
    if (isset($submitBtn)) {
        $link = mysqli_connect('localhost', "root", "", "stu_data");
        $query = "insert into students (stu_img_link,stu_name, stu_email, stu_age, stu_mob, stu_course, stu_10_per) values('$stu_img','$unm','$email',$age,$mob,'$course',$percent);";
        $result = mysqli_query($link, $query);
        mysqli_close($link);
        if ($result) {
            echo "<div class='alert alert-success text-center'>Data inserted successfully</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Data not inserted</div>";
        }
    };
    ?>

    <section class="container mt-5">
        <header class="text-center mb-4">Add the Details of the Student</header>
        <form method="post" action="#">
            <table class="table table-dark table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Full Name</th>
                        <td><input class="form-control" placeholder="Enter full name" name="unm" type="text" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Phone Number</th>
                        <td><input class="form-control" placeholder="Enter phone number" name="mob" type="number" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Course</th>
                        <td>
                            <select class="form-select" name="course" required>
                                <option hidden>Select Course</option>
                                <option value="Btech-CSE">Btech-CSE</option>
                                <option value="Btech-ME">Btech-ME</option>
                                <option value="MBA">MBA</option>
                                <option value="BCA">BCA</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><input class="form-control" name="email" placeholder="Enter email" type="email" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Age of Student</th>
                        <td><input class="form-control" name="age" placeholder="Enter age" type="number" max="100" required></td>
                    </tr>
                    <tr>
                        <th scope="row">10th Percentage</th>
                        <td><input class="form-control" name="percent" placeholder="Enter percentage" type="number" step="0.01" max="100" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Add the Image of Student</th>
                        <td><input class="form-control" type="file" name="imglink" accept="image/*"></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <button class="btn btn-primary mt-3" type="submit" name="submitBtn">Submit</button>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
