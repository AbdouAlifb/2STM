<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        h2 {
            color: #444;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 120px; /* Adjust the size as needed */
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        .field {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/logo2.jpeg" alt="Company Logo" class="logo">
        <h2>Nouveau message de contact</h2>
        <p><span class="field">Nom:</span> {{ $contact['name'] }}</p>
        <p><span class="field">Email:</span> {{ $contact['email'] }}</p>
        <p><span class="field">Sujet:</span> {{ $contact['subject'] }}</p>
        <p><span class="field">Message:</span><br>{{ $contact['message'] }}</p>
    </div>
</body>
</html>
