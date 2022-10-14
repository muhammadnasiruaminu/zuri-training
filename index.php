<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user_data.php" method="POST">
        <label>First Name</label> <br>
        <input type="text" name="firstname"> <br>
        <label>Email</label> <br>
        <input type="text" name="email"> <br>
        <label>Date of birth</label> <br>
        <input type="date" name="dob"> <br>
        <label>Gender</label> <br>
        <select name="gender">
            <option value="">select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
       </select> <br>
       <label>Country</label> <br>
        <input type="text" name="country"> <br>
       <br>
       <input type="submit" name="saveData" value="Save">

    </form>
</body>
</html>