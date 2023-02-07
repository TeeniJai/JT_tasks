<?php include "header.php" ?>

<h3> Exercise 3. In-class Task Variable & Operators</h3>

<h2>Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using h3
    tag: Hello …., You are welcome to my site.
</h2>
<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" name="fname" requierd placeholder="First Name" class="form-control">
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control">
        </div>
        <div class="row">
            <div class="col">
                <input type="date" name="bdate" required placeholder="Birthday" class="form-control"><br>
            </div>
            <div class="col">
                <input type="color" name="color" requierd placeholder="Color" class="form-control"><br>
            </div>
            <input type="submit" value="Submit">
        </div>
    </div>
</form>
<?php include "footer.php" ?>