<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font import -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            max-width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        textarea {
            height: 100px;
        }

        button {
            padding: 10px 20px;
            background-color: #d9d9d9;
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #adadad;
        }

        /* Compass */
        .compass {
            text-align: justify;
            position: relative;
            overflow: hidden;
        }

        .compassitem:before,
        .compassactive:after {
            content: '';
            width: 100%;
            border: 2px solid #d9d9d9;
            position: absolute;
            top: 1em;
            margin-top: -2px;
            z-index: -1;
        }

        .compass:after {
            content: "";
            display: inline-block;
            width: 100%;
        }

        .compassitem {
            width: 2em;
            height: 2em;
            text-align: center;
            line-height: 2em;
            border-radius: 50%;
            background: #d9d9d9;
            margin: 0 1em;
            display: inline-block;
            color: #000000;
        }

        .compassactive {
            width: 2em;
            height: 2em;
            text-align: center;
            line-height: 2em;
            border-radius: 50%;
            background: #000000;
            margin: 0 1em;
            display: inline-block;
            color: white;
        }

        @media (max-width: 768px) {

            /* Styles for tablets */
            .container {
                max-width: 80%;
            }
        }

        @media (max-width: 576px) {

            /* Styles for smartphones */
            .container {
                max-width: 90%;
            }
        }
    </style>

    <title>Form</title>
</head>

<body>
    <div class="container">
        <h1>Contact Us</h1>

        <ul class="compass">
            <li class="compassactive">1</li>
            <li class="compassitem">2</li>
            <li class="compassitem">3</li>
        </ul>


        <form id="contactForm">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" required>
            </div>

            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company">
                <div class="form-group">
                </div>

                <button type="submit">Next</button>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>