<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<h2>Welcome to ToucanTest</h2>

<form action="submit" method="post">
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Name" required><br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" placeholder="Email Address" required><br>

    <label for="school">School:</label>
    <select id="school" name="school" required> <br>
        <!-- Really would want to loop the schools from the database and do a for each -->
        <option value="school_1">School 1</option>
        <option value="school_2">School 2</option>
    </select><br>

    <button type="submit" name="addMember">Add Member</button>
</form>



    
<h2>List of Members</h2>
    <form action="members.php" method="get">
        <label for="schoolFilter">Filter by School:</label>
        <select id="schoolFilter" name="schoolFilter">
            <option value="All">All Schools</option>
            <option value="School A">School A</option>
            <option value="School B">School B</option>
            <option value="School C">School C</option>
        </select>
        <button type="submit" name="filterMembers">Filter</button>
    </form>
  


</body>
</html>