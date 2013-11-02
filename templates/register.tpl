<form  method="post" action="index.php" id ="registerForm">
            <table>
                <tr><td>Name:</td><td> <input type="text" name="name"><br></td></tr>
                <tr><td>Username:</td><td> <input type="text" name="user"><br></td></tr>
                <tr><td>Password: </td><td><input type="password" name="pass"><br></td></tr>
                <tr><td>Email: </td><td><input type="text" name="mail"><br></td></tr>
                <tr><td>Hint: </td><td><input type="text" name="hint"><br></td></tr>
                <input type="hidden" value="1" name="isSubmited">
                <tr><td></td><td><input type="submit" value="Signup"></td></tr>
            </table>
        </form>