<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <style>
        body{
            background: whitesmoke;
        }
        .header{
            background: whitesmoke;
        }
        h1{
            font-family: sans-serif;
            text-transform: uppercase;
            background: linear-gradient(to right, #f32170, #ffeb07, #2196f3, #ff00eb);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-stroke: 2px black;
        }
        .hed{
            background: #ccc;
            color: black;
        }
        .hed h1{
            padding-top: 20px;
            padding-bottom: 25px;
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
    <div id="wrapper" class="clearfix">
        <section id="page-title">
            <div class="container clearfix hed">
            </div>
        </section>
        <div class="header">
            <center>
                <h1>Insert Data</h1>
            </center>
        </div>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-5" id="hide">
                            <form  class="row form" action="insert.php" method="post">
                                <?php include 'form.php'; ?>
                                <div class="col-12 form-group">
                                    <input type="submit" class="btn btn-secondary float-right p-2 mb-1 bg-success text-white" name="submit" value="Insert">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 p-0">
                            <table class="table table-warning">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include 'database.php';
                                        $b = new database();
                                        $b->select("data","*");
                                        $result = $b->sql;
                                    ?>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['message']; ?></td>
                                            <td>
                                                <a href="view.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-success btn-sm">View</a>
                                            </td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <a href="" type="button"  data-toggle="modal" data-id="<?php echo $row['id']; ?>" data-target="#myModal" id="del" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                              </tbody>
                            </table>
                            <center>
                            <a href="index.php" type="button"  class="btn btn-warning btn-sm">refresh</a>
                                    </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(document).on('click',"#del",function(e) {
                e.preventDefault();
                var del = $(this).data('id');

                swal({
                    title: "Apakah Kamu yakin?",
                    text: "Setelah dihapus, Anda tidak akan dapat memulihkan file ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url : "delete_data.php",
                            type : "POST",
                            data : {id:del},
                            success : function() {
                                swal({
                                    title: "sukses!",
                                    text: "Delete data",
                                    imageUrl: 'thumbs-up.jpg
                                }); 
                            }
                        });       
                    } else {
                        swal("Penghapusan dibatalkan!");
                    }
                });
            });
        });
    </script>
</body>
</html>
