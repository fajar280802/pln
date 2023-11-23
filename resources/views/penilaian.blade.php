<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .label {
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            position: relative;
            left: 150px;
            background-color: #fff;
            border-radius: 8px;
            align-items: center;
            justify-content:center;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            color:#29ADB2;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color:#BE3144;
        }
        

        @media screen and (max-width: 600px) {
            .grid-container {
                grid-template-columns: 1fr;
                position: relative;
                left: 10px;
            }}
    </style>
    <title>Grid with Link Button</title>
</head>
<body>

<h1 class="label">Plihi Kategori</h1>

<div class="grid-container">
    <div class="card">
      
        <div class="card-content">
          <center>  <h2>TAD ADM</h2>
            <p>Di ketuai oleh Mr.jiko</p>
             <a href="{{'adm'}}" class="btn">Buka</a></center>
        </div>
    </div>

    <div class="card">
      
        <div class="card-content">
          <center>  <h2>TAD DRIVER</h2>
            <p>Di Ketuai Oleh Ms.yanti</p></center>
            <center> <a href="https://example.com" class="btn">Buka</a></center>
        </div>
    </div>

    <div class="card">
        
        <div class="card-content">
            <center><h2>TAD Cleaning </h2>
            <p>Di Ketuai oleh Mr.ijat</p></center>
           <center> <a href="https://example.com" class="btn">Buka</a></center>
        </div>
    </div>
</div>

</body>
</html>
