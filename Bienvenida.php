<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
        url('fondo.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100vh;
        margin: 0;
        padding: 20px;
    }
    .container {
        text-align: center;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    h1 {
        font-size: 2rem;
        margin-bottom: 20px;
    }
    .options button {
        background-color: #28c2d9;
        color: white;
        padding: 10px 20px;
        margin: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s;
    }
    .options button:hover {
        background-color: #197381;
    }
</style>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <div class="options">
            <button onclick="navigateTo('agregar')">Agregar</button>
            
            <button onclick="navigateTo('buscar')">Buscar</button>
        </div>
    </div>

    <script>
    function navigateTo(option) {
        if (option === 'editar') {
            window.location.href = 'Editar.php';
        } else if (option === 'buscar') {
            window.location.href = 'Buscar.php';
            } else if (option === 'agregar'){
                window.location.href = 'Agregar.php';
            }
        }
    </script>
</body>
</html>
