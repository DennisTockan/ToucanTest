<?php

$errors = ['name' => '', 'email' => '', 'school' => ''];

if (isset($_POST['submit'])){

    // Check Name
        if(!empty($_POST['name'])){
            $errors["name"] = "Name is required <br>";
       } else {
          $name = $_POST['name'];
          if(!preg_match('/[a-z]+$/gi', $name)){
            $errors["name"] = "You must input a valid name <br>";
          }
       };
    

    // Check Email
        if(empty($_POST['email'])){
            $errors["email"] = "Email is required <br>";
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors["email"] = "The email must be a valid email address.";
            }
        };

    // Check School
        if(empty($_POST['school'])){
            $errors["school"] = "Please select your school <br>";
        };

        if(!array_filter($errors)){
            header("Location : index.php");
        }



    }




?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<section class="container grey-text">

<h4 class="center">ToucanTech</h4>
<form class="white" action="add.php" method="POST">

    <label for="name">Name:</label>
    <input type="text" id="name" class="name" placeholder="Name" value="<?php echo htmlspecialchars($name) ?>" required><br>
    <div class="red-text"> <?php echo $errors['name']; ?></div>

    <label for="email">Email Address:</label>
    <input type="email" id='email' name='email' placeholder="Email Address" value="<?php echo htmlspecialchars($email) ?>" required><br>
    <div class="red-text"> <?php echo $errors['email']; ?></div>

    <label for="school">School:</label>
    <select name="school" id="school" required>
        <!-- Really would want to loop the schools from the database and do a for each -->
        <option value="school_a">School A</option>
        <option value="school_b">School B</option>
    </select><br>
    <div class="red-text"> <?php echo $errors['school']; ?></div>


    <div class="center">
     <button type="submit" name="submit" class="btn brand z-depth-0">Add a Member</button>
    </div>

</form>
</section>


<?php include('templates/footer.php')?>    

</html>