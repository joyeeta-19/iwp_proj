<?php
$conn=mysqli_connect("localhost","root","","iwp_proj");
session_start();
$teacher=$_SESSION['userid'];
?>
<html lang="en">
<head>
    <title>new Assignment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>
        nav{
            background-color: black;
            opacity: 85%;
        }
        a{
            font-size: 20px;
        }
        nav{
            width: 100%;
        }
        .banner-area{
            background-image: url("img/banner-bg.png");
            height: 20%;
        }
        h1 {
            font-size: 50px;
            word-break: break-all;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        img{
            width: 100%;
            height: 250px;
        }
        #notheader{
            padding: 50px;
        }
    </style>
</head>
<body>
<header id="header">
    <div class="container">
        <div class="row pull-right">
            <div id="logo">
            </div>
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color fixed-top">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                    <ul class="navbar-nav mr-auto pull-left">
                        <li class="nav-item active">
                            <a class="nav-link" href="teacher_dashboard.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Exams
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="#">New Exam</a>
                                <a class="dropdown-item" href="#">Manage Exam</a>
                                <a class="dropdown-item" href="#">Exam History</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Assignments
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="#">Upload Assignments</a>
                                <a class="dropdown-item" href="#">View Assignments</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto nav-flex-icons pull-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                 aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="#">Logout</a>
                                <a class="dropdown-item" href="#">Profile</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<section class="banner-area relative">
    <div class="container" id="cont2">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Class Materials
                </h1>
                <div class="link-nav">
						<span class="box">
							<a href="teacher_dashboard.php">Home </a><i class="fa fa-chevron-left" aria-hidden="true"></i>
							<a href="courses.php">Courses</a><i class="fa fa-chevron-left" aria-hidden="true"></i><a href="course1.php">Class materials</a>
						</span>
                </div>
            </div>
        </div>
    </div>
    <div class="rocket-img">
        <img src="img/rocket.png" alt="">
    </div>
</section>
<?php

if(isset($_POST['add'])) {

    $name = $_POST['filename'];
    $course = $_POST['course'];
    $desc = $_POST['desc'];
    $file=$_FILES["file"];
    $filename= $_FILES["file"]["name"];
    $file_path="uploads/" .$file["name"];
    $res=move_uploaded_file($file["tmp_name"], "uploads/" .$file["name"]);
    $sql = "INSERT INTO class_materials (filename,coursename,tch_id,description,file) VALUES ('$name','$course','$teacher' ,'$desc','$filename')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Successfully Inserted";
    } else {
        echo "no";
    }
}
if(isset($_GET["del"])){
    $fileid = $_GET["del"];
    $delques=mysqli_query($conn, "DELETE FROM class_materials WHERE fileid='$fileid'" );
    if($delques){
        echo "successfully deleted";
    } else {
        echo "Failed to delete question";
    }
}
?><br><br>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Assignment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right"><i class="fa fa-question-circle" aria-hidden="true"></i> File Name</label>
                        <input type="text" name="filename" id="assgn" class="form-control validate"><br>
                        <label data-error="wrong" data-success="right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Course Name</label>
                        <input type="text" name="course" id="desc" class="form-control validate"><br>
                        <label data-error="wrong" data-success="right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Description</label>
                        <input type="text" name="desc" id="ddate" class="form-control validate"><br>
                        <label data-error="wrong" data-success="right"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Choose File</label>
                        <input type="file" name="file" id="file" class="form-control validate"><br>
                        <input class="btn btn-success" type="submit" name="add" value="Add">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="notheader">
<div class="text-center">
    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">Add Material</a><br><br>
</div>
<?php
$result = mysqli_query($conn,"select * from class_materials where tch_id='$teacher'");

echo "<br><br><table class=\"table table-hover\" style='text-align:center ;background-color: whitesmoke;'>
<thead>
<tr>
<th scope=\"col\">Course Name</th>
<th scope=\"col\">File Name</th>
<th scope=\"col\">Description</th>
<th scope=\"col\">Uploaded On</th>
<th scope=\"col\">File</th>
<th scope=\"col\">Action</th>
</tr>
</thead>";
while ($row = mysqli_fetch_array($result)) {
$fname = $row['file'];
$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++) {
if ($files[$a] == $fname) {
?>
<?php
echo "<tr>";
echo "<td>" . $row['coursename'] . "</td>";
echo "<td>" . $row['filename'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['uploaded_on'] . "</td>";
echo "<td id='date'>"?>
<a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a></body></html></td>
<?php echo "<td><button class='btn btn-danger'><a style='color: white' href='course1.php?del=" . $row["fileid"] . "'>Delete</a></button></td>";
}
}}
echo "</table>";
?>
</div>
</body>
</html>
