<?php
session_start();
require 'conexion.php';

// --- CONFIGURACIÓN ---
$password_admin = "MaximasNoticias"; // CAMBIA ESTA CONTRASEÑA POR UNA SEGURA

// Lógica de Login
if (isset($_POST['login'])) {
    if ($_POST['password'] === $password_admin) {
        $_SESSION['admin_logged'] = true;
    } else {
        $error = "Contraseña incorrecta";
    }
}

// Lógica para Guardar Noticia
$mensaje = "";
if (isset($_POST['publicar']) && isset($_SESSION['admin_logged'])) {
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $cuerpo = $_POST['cuerpo'];

    // Sentencia Preparada (Seguridad contra Hackers)
    $stmt = $conn->prepare("INSERT INTO noticias (titulo, subtitulo, cuerpo) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $titulo, $subtitulo, $cuerpo);

    if ($stmt->execute()) {
        $mensaje = "<div class='alerta exito'>✅ Noticia publicada correctamente</div>";
    } else {
        $mensaje = "<div class='alerta error'>❌ Error al publicar: " . $conn->error . "</div>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Máximas Legales</title>
    <style>
        body { font-family: 'Arial', sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .contenedor { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 20px; }
        input, textarea { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #2c3e50; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 1rem; transition: 0.3s; }
        button:hover { background: #1a252f; }
        .alerta { padding: 10px; margin-bottom: 15px; border-radius: 5px; text-align: center; }
        .exito { background: #d4edda; color: #155724; }
        .error { background: #f8d7da; color: #721c24; }
        label { font-weight: bold; color: #555; font-size: 0.9rem; }
    </style>
</head>
<body>

    <div class="contenedor">
        <?php if (!isset($_SESSION['admin_logged'])): ?>
            <h2>🔒 Acceso Admin</h2>
            <?php if (isset($error)) echo "<div class='alerta error'>$error</div>"; ?>
            <form method="POST">
                <input type="password" name="password" placeholder="Contraseña de acceso" required>
                <button type="submit" name="login">Entrar</button>
            </form>

        <?php else: ?>
            <h2>📝 Publicar Nueva Noticia</h2>
            <?php echo $mensaje; ?>
            <form method="POST">
                <label>Título Principal</label>
                <input type="text" name="titulo" placeholder="Ej: Nueva Ley de Copropiedad" required>
                
                <label>Subtítulo (Opcional)</label>
                <input type="text" name="subtitulo" placeholder="Ej: Lo que debes saber sobre...">
                
                <label>Cuerpo de la noticia</label>
                <textarea name="cuerpo" rows="6" placeholder="Escribe aquí el contenido..." required></textarea>
                
                <button type="submit" name="publicar">Publicar Noticia</button>
            </form>
            <p style="text-align:center; margin-top:20px;"><a href="index.php" style="color:#666;">← Volver al sitio</a></p>
        <?php endif; ?>
    </div>

</body>
</html>
