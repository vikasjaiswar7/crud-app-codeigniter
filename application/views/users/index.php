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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud-App</title>
</head>

<body>
    <h1 class="text-center mt-5 mb-3">Crud-App</h1>

    <div class="container">
        <h1>Users</h1>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Language</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?php echo $user->name; ?>
                        </td>
                        <td>
                            <?php echo $user->email; ?>
                        </td>
                        <td>
                            <?php echo $user->address; ?>
                        </td>
                        <td>
                            <?php echo $user->phone; ?>
                        </td>
                        <td>
                            <?php echo $user->gender; ?>
                        </td>
                        <td>
                            <?php echo $user->language; ?>
                        </td>
                        <td>
                      
                            <a href="<?php echo base_url('users/edit/' . $user->id); ?>"  class="btn btn-success">Edit</a>
                            <a href="<?php echo base_url('users/delete/' . $user->id); ?>"  class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            <tbody>
                <a href="<?php echo base_url('users/create'); ?>" class="btn btn-warning mb-2" >Add User</a>
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                    crossorigin="anonymous"></script>
</body>

</html>