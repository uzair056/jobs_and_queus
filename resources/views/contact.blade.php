<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="/contact" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <br><br>

    <input type="email" name="email" placeholder="Email">
    <br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>