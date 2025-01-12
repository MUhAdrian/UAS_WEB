<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Muhammad Adrian Arsy Fadila</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
            color: #333;
            padding: 0;
            margin: 0;
        }
        .profile-container {
            background-image: url(https://picsum.photos/1920/1080);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .profile-container:hover {
            transform: scale(1.05);
        }
        .profile-image {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .profile-container:hover .profile-image {
            transform: rotate(15deg);
        }
        .profile-text {
            margin-left: 20px;
        }
        .profile-text h3 {
            font-size: 2rem;
            color: #e74c3c;
            font-weight: 600;
        }
        .profile-text p {
            color: #555;
            font-style: italic;
        }
        .text-container {
            margin-top: 40px;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }
        .text-container h4 {
            color: #e74c3c;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .text-container p {
            color: #555;
            line-height: 1.8;
        }
        .text-container ul {
            list-style-type: none;
            padding: 0;
        }
        .text-container ul li {
            background: #f1f1f1;
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
            font-weight: 500;
            transition: transform 0.3s ease-in-out, background 0.3s ease-in-out;
        }
        .text-container ul li:hover {
            background: #e74c3c;
            color: #fff;
            transform: translateX(10px);
        }
        .text-container ul li:hover::before {
            content: "\2022";
            color: #fff;
            font-size: 2rem;
            margin-right: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="container">
       
        <div class="profile-container">
            <img src="me/me.jpg" class="rounded-circle profile-image" alt="Profile picture">
            <div class="profile-text">
                <h3 class="mb-1">Muhammad Adrian Arsy Fadila</h3>
                <p class="mb-0">Web Developer</p>
            </div>
        </div>

       
        <div class="text-container">
            <h4>About Me</h4>
            <p>Saya adalah seseorang yang selalu berusaha untuk hidup dengan penuh makna, menghargai setiap momen yang diberikan oleh Tuhan. Dalam perjalanan hidup ini, saya percaya bahwa setiap langkah yang saya ambil membawa saya lebih dekat kepada tujuan hidup yang hakiki, yaitu menggapai kebahagiaan abadi di akhirat. Saya bekerja dengan penuh dedikasi, namun selalu mengingat bahwa dunia ini hanya sementara.

Sejauh masa lalu dan se-dekat kematian, setiap langkah yang kita ambil adalah bagian dari takdir-Nya, dan setiap perbuatan kita adalah untuk akhirat yang kekal.
            <h4>Skills</h4>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>C#</li>
                <li>aminn</li>

            </ul>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
