@extends('layouts/layout_welcome')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .profile-card h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto 20px;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-card .form-group {
            text-align: left;
        }

        .profile-card label {
            font-weight: bold;
            margin-top: 10px;
        }

        .profile-card input[type="text"],
        .profile-card input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .profile-card .save-btn {
            background: linear-gradient(45deg, #ff6b6b, #ffcc80);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .profile-card .save-btn:hover {
            background: linear-gradient(45deg, #ffcc80, #ff6b6b);
        }
    </style>
</head>

<body>
    <div class="profile-card">
        <h1>Profile</h1>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="profile-picture">
                @if($user->profile_picture)
                    <img src="{{ asset('images/' . $user->profile_picture) }}" alt="Profile Picture">
                @else
                    <img src="default-profile.png" alt="Default Profile Picture">
                @endif
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required readonly>
            </div>
            <div class="form-group">
                <label for="profile_picture">Change Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture">
            </div>
            <button type="submit" class="save-btn">Save</button>
        </form>
    </div>
</body>

</html>