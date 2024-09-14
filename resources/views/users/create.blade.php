<!-- resources/views/users/create.blade.php -->

<form action="/account/users" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required><br>

    <label for="role">Role:</label>
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="employee">Employee</option>
    </select><br>

    <button type="submit">Add User</button>
</form>
