<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php">
        <fieldset>
        <legend>1. Basic Information</legend>
        <label >first name :</label>
        <input type="text" name="fname"> <br>
        <label > Last name :</label>
        <input type="text" name="lname"> <br>
        <label >Gender</label>
        <input type="radio"  name="gender" value="male"> 
        <label >Male</label>
        <input type="radio"  name="gender" value="female">
        <label >Female</label> <br>
        <label >Enter you Date of Birth</label>
        <input type="text" name="dob"> <br>
        <label for="dob">Region</label>
        <select>
        <option >Islam</option>
        <option >Hindu</option>
        <option >Buddhist</option>
        <option>Christianity</option>
        <option >Jeus</option>
        <option >Other</option>
        
    
        </select>
        

        </fieldset>
        <fieldset>
        <legend>2. Contact information</legend>

        <label >Present Address :</label>
        <textarea name="address1" name="address1" ></textarea> <br>
        <label >Permanent Address :</label>
        <textarea name="address2" name="address2" ></textarea> <br>
        <label >Phone</label>
        <textarea name="phone  " name="phone" ></textarea> <br>

        <label >Email :</label>
        <input type="text" name="email"> <br>
        <label >Personal Website Link :</label>
        <a href="#">link</a><br>
        
        </fieldset>
        
        <input type="submit">
    </form>
</body>
</html>