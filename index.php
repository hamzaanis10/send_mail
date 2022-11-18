<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'links.php';
    ?>
    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="card m-5 p-5">
            <h2 class="text-center">Contact Us</h2>
            <form action="send_email.php" method="POST">
                <div class="mb-3">
                    <label for="nameinput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameinput" name="name" placeholder="Enter your name..">
                </div>
                <div class="mb-3">
                    <label for="emailinput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailinput" name="email" placeholder="Enter your email..">
                </div>
                <div class="mb-3">
                    <label for="addressinput" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="addressinput" placeholder="Enter your address..">
                </div>
                <div class="mb-3">
                    <label for="messageinput" class="form-label">Message</label>
                    <textarea class="form-control" id="messageinput" name="message" rows="3"></textarea>
                </div>
                <button class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>