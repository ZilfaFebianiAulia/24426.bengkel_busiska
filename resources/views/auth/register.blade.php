<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

<form method="POST" action="/register" class="p-4 shadow bg-white rounded" style="width:300px;">
    @csrf
    <h4 class="text-center mb-3">Register</h4>

    <input type="text" name="username" placeholder="Username" class="form-control mb-2" required>
    <input type="text" name="email" placeholder="Email" class="form-control mb-2" required>
    <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>

    <button class="btn btn-warning w-100">Register</button>

    <p class="text-center mt-2 mb-0">
        <a href="/login">Login</a>
    </p>
</form>

</body>
</html>