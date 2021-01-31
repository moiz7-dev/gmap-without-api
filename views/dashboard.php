<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Gmap | location</title>
    <style>
        * {
            margin: 5px;
            padding: 0;
        }

        .box {
            margin-left: 20px;
            width: 695px;
            height: 401px;
        }

        iframe {
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }
    </style>
</head>

<body>
    <h1>Gmap Live Location</h1>

    <form action="<?php echo base_url('gmap/addLocation') ?>" method="POST">
        <input type="text" name="name" placeholder="Enter Name"><br>
        <input type="text" name="latitude" placeholder="Enter Latitude"><br>
        <input type="text" name="longitude" placeholder="Enter longitude"><br>
        <input type="submit" value="Add Location" name="submit" />
    </form>

    <div class="col-sm-10 text-center tab">
        <table>
            <tbody>
                <tr>
                    <td>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Employee Name</th>
                                    <!-- <th scope="col">Latitude</th>
                                    <th scope="col">Longitude</th> -->
                                    <th scope="col">Locations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $id = 0;
                                foreach ($users as $user) { ?>
                                    <tr>
                                        <td><?php echo $id += 1; ?></td>
                                        <td><?php echo ucfirst($user['name']); ?></td>
                                        <!-- <td><?php echo $user['latitude']; ?></td>
                                        <td><?php echo ($user['longitude']); ?></td> -->
                                        <td>
                                            <a href="<?php echo base_url('gmap/show/') . $user['id'] ?>"><button type='submit' name='show' class='btn btn-primary btn-sm' style='padding:1px 5px;'>Show</button></a>
                                            <?= anchor(base_url('gmap/delete/') . $user['id'], "<button type='button' class='btn btn-danger btn-sm' style='padding:1px 5px;'>Delete</button>", array('onclick' => "return confirm('Do you want delete this record')")) ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <div class="box">
                            <?php if (isset($location)) { ?>
                                <iframe width='695px' height='401px' src="https://maps.google.com/maps?q=<?php echo $location[0]['latitude'] ?>,<?php echo $location[0]['longitude'] ?>&output=embed" frameborder="0"></iframe>
                            <?php }; ?>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>