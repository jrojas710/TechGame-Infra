<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"><title>TechGame Solutions</title>
    <style>
        body { font-family: Arial; background: #f4f4f9; margin:0; }
        header { background: #2c3e50; color: white; padding: 15px; text-align: center; }
        nav { background: #34495e; padding: 10px; text-align: center; }
        nav a { color: white; margin: 0 10px; text-decoration: none; font-weight: bold; }
        .container { padding: 20px; max-width: 800px; margin: auto; background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); margin-top:20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #2c3e50; color: white; }
    </style>
</head>
<body>
    <header><h1>TechGame Solutions</h1></header>
    <nav>
        <a href="?seccion=home">Home</a> | <a href="?seccion=nosotros">Nosotros</a> | 
        <a href="?seccion=productos">Productos</a> | <a href="?seccion=clientes">Clientes</a> | 
        <a href="?seccion=proveedores">Proveedores</a> | <a href="?seccion=eventos">Eventos</a> | 
        <a href="?seccion=inscribete">Inscríbete</a> | <a href="?seccion=admin">Admin</a>
    </nav>
    <div class="container">
        <?php
        $sec = $_GET['seccion'] ?? 'home';
        if ($sec == 'home') echo "<h2>Landing Page Moderna</h2><p>Infraestructura Linux</p>";
        if ($sec == 'nosotros') echo "<h2>Sobre Nosotros</h2><p>Somos D'Game Engineers Inc.</p>";
        
        if ($sec == 'productos') {
            echo "<h2>Consulta 1: Productos</h2><table><tr><th>ID</th><th>Nombre</th><th>Stock</th></tr>";
            $res = $conn->query("SELECT * FROM productos");
            while($row = $res->fetch_assoc()) { echo "<tr><td>{$row['id']}</td><td>{$row['nombre']}</td><td>{$row['stock']}</td></tr>"; } echo "</table>";
        }
        if ($sec == 'clientes') {
            echo "<h2>Consulta 2: Clientes</h2><table><tr><th>Nombre</th><th>Email</th></tr>";
            $res = $conn->query("SELECT * FROM clientes");
            while($row = $res->fetch_assoc()) { echo "<tr><td>{$row['nombre']}</td><td>{$row['email']}</td></tr>"; } echo "</table>";
        }
        if ($sec == 'proveedores') {
            echo "<h2>Consulta 3: Proveedores Activos</h2><table><tr><th>Proveedor</th><th>Estado</th></tr>";
            $res = $conn->query("SELECT * FROM proveedores WHERE estado='Activo'");
            while($row = $res->fetch_assoc()) { echo "<tr><td>{$row['nombre']}</td><td>{$row['estado']}</td></tr>"; } echo "</table>";
        }
        ?>
    </div>
</body>
</html>
