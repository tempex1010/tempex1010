<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* Ensure no scrollbar is shown */
        }
        .progress-container {
            width: 100%;
            background-color: #e0e0e0;
            position: absolute;
            top: 0;
            left: 0;
        }
        .progress-bar {
            width: 83%; /* Width set to 50% to indicate half-loading */
            height: 10px; /* Adjust the height of the progress bar */
            background-color: #3498db;
            animation: load 2s linear;
        }
        @keyframes load {
            0% { width: 0%; }
            100% { width: 83%; }
        }
        .spinner {
            border: 16px solid #f3f3f3; /* Light grey */
            border-top: 16px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            margin-bottom: 20px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="progress-container">
        <div class="progress-bar"></div>
    </div>
    <div class="spinner"></div>
</body>
</html>
