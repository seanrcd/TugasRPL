<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>Show</title>
    <style>
        .hed{
            background: #ccc;
            font-family: sans-serif;
            text-transform: uppercase;
            background: linear-gradient(to right, #f32170, #ffeb07, #2196f3, #ff00eb);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-stroke: 2px black;
        }
        .hed h1{
            padding-top: 20px;
            padding-bottom: 15px;
        }
        .form{
            margin-top: 50px;
            background: #ccc;
        }
        .table{
            margin-top: 50px;
        }

    </style>
</head>
<body class="stretched">
    <div class="col-md-12 hed">
        <center>
        <h1>View Data</h1>
        </center>
    </div>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <table class="table table-dark">
                            <?php 
                                include 'database.php';

                                $id = $_GET['id'];
                                $b = new database();
                                $b->select("data","*","id='$id'");
                                $result = $b->sql;

                                $row = mysqli_fetch_assoc($result);
                             ?>
                          <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td><?php echo $row['id']; ?></td>
                                </tr>  
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $row['name']; ?></td>
                                </tr>
                                 <tr>
                                    <th>Email</th>  
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>  
                                    <td><?php echo $row['phone']; ?></td>
                                </tr> 
                                <tr>
                                    <th>Subject</th>
                                    <td><?php echo $row['subject']; ?></td>
                                </tr> 
                                <tr> 
                                    <th>Message</th>
                                    <td><?php echo $row['message']; ?></td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section >
    <center><a href="index.php" type="button" class="btn btn-primary">Back</a></center>
    </section>
       
</body>
</html>
