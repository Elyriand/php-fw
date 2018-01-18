<form class="form-signin" method="post">
    <h2 class="form-signin-heading">Register</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus value="<?= $_email ?>">
    <label for="inputName" class="sr-only">Name</label>
    <input type="email" name="email" id="inputName" class="form-control" placeholder="Name" required autofocus value="<?= $_name ?>">
    <label for="inputFirstName" class="sr-only">First Name</label>
    <input type="email" name="email" id="inputFirstName" class="form-control" placeholder="FirstName" required autofocus value="<?= $_firstName ?>">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
    <input type="password" name="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
