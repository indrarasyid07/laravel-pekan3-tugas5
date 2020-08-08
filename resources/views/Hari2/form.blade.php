<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        @csrf
        <p>First name :</p>
        <input type="text" name="FirstName">
        <p>Last name :</p>
        <input type="text" name="LastName">
        <p>Gender :</p>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br>
        <p>Nationality :</p>
        <select name=Nationality>
            <option>Indonesian</option>
            <option>Malaysian</option>
            <option>Russian</option>
        </select>
        <p>Language Spoken :</p>
        <input type="checkbox" name="Language">Bahasa Indonesian <br>
        <input type="checkbox" name="Language">English <br>
        <input type="checkbox" name="Language">Other <br>
        <p>Bio :</p>
        <textarea cols="40" rows="7" name="Bio"></textarea>
        </br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>