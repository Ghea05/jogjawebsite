<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Luas Trapesium</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        /* Tambahan agar placeholder-nya kelihatan */
        input::placeholder {
            color: #888;
            font-style: italic;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .hasil {
            margin-top:
