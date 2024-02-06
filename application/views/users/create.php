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
    <div class="container">
        <h1 class="text-center mt-5 mb-3">Crud-App</h1>

        <?php echo form_open(base_url('users/create')); ?>
        <div class="form-group">
            <label for="exampleFormControlInput2">Full Name</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput2" placeholder="Full Name">
            <?php echo form_error('name'); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
            <?php echo form_error('email'); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Phone</label>
            <input type="number" name="phone" class="form-control" id="exampleFormControlInput2" placeholder="phone">
            <?php echo form_error('phone'); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Address</label>
            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
            <?php echo form_error('address'); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Language</label>
            <select class="form-control" name="language" id="exampleFormControlSelect1">
                <option value="">Select</option>
                <option value="hindi">Hindi</option>
                <option value="english">English</option>
                <option value="marathi">marathi</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Gender</label>
            <div class="form-group">
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">FeMale
            </div>
            <?php echo form_error('gender'); ?>
        </div>
        <button type="submit" class="btn btn-primary align-item-center mb-5">Submit</button>
        <?php echo form_close(); ?>


    </div>
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