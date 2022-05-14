<?php
// login.php: Displaying login page

?>
          <h1>Login</h1>
          <form name=loginform method=POST action="<?php echo $_SERVER['SCRIPT_NAME'] . "?" . $_SERVER['QUERY_STRING']?>">
          <table>
          <tr>
             <td>Username:</td>
            <td><input type=text name=user_name size=30 autocomplete=no value=<?php 
              echo htmlspecialchars($_POST['user_name']); ?>></td>
          </tr>
          <tr>
             <td>Password:</td>
            <td colspan=2><input type=password name=password size=30 autocomplete=no>
            <input type=submit name=submit_login value="Log in"></td>
          </tr>
          </table>
          </form>

<div id="warnings">
<?php global $login_register_result; echo $login_register_result?>
</div>

<script>document.loginform.login_username.focus();</script>
