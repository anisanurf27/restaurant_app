<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
