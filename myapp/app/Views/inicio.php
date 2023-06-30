<!DOCTYPE html>
<html>
<head>
    <title>Carro ESP32</title>
    <style>
        html {
            background-color: #8499a5;
        }
        
        header {
            background: rgba(0,0,0,0.7);
            width: 100%;
            position: fixed;
            z-index: 100;
            text-align: center;
        }

        nav {
            float: left;
        }

        nav ul {
            list-style: none;
            overflow: hidden; 
        }

        nav ul li {
            float: left;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        nav ul li a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
        }

        nav ul li:hover {
            background: #eca023;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/charts">Grafica 1</a></li>
                <li><a href="/tabla">Tabla de contenido</a></li>
                <li><a href="">Cerrar</a></li>
            </ul>
        </nav>
    </header>
<div style="text-align: center;">
    <br><br><br>
    <p><h1>Monitoreo ambiental con carro usando esp32 integrando el sensor DHT11 y MQ9</h1></p>
    <img src="https://th.bing.com/th/id/OIP.AzK0HpzywFGpUUKKdev6ogHaFj?pid=ImgDet&rs=1" alt="Imagen del carrito ESP32">
</div>
    
<div style="text-align: center;">
    <br><br>
    <p><h1>Problematica</h1></p>  
    <h3 style="text-align:center">En muchas zonas urbanas en la actualidad, 
        la calidad del aire puede ser un problema grave debido a la contaminación generada 
        por diversas fuentes, como el tráfico vehicular, las industrias y las actividades humanas. 
        Sin embargo, a menudo no se cuenta con una supervisión adecuada y constante de los 
        niveles de contaminantes en el aire en diferentes áreas de la ciudad, lo cual puede 
        resultar en situaciones en las que los residentes de una zona determinada no estén 
        plenamente conscientes de los niveles de contaminación atmosférica a los que están 
        expuestos. Estas circunstancias pueden tener consecuencias serias para la salud, 
        especialmente en personas con enfermedades respiratorias o sensibilidad a los contaminantes
         ambientales.</h3>

         <br><br>
         <p><h1>Justificacion</h1></p>  
         <h3 style="text-align:center">El monitoreo ambiental es esencial para evaluar 
            la calidad del aire y las condiciones climáticas en entornos urbanos y rurales. 
            Tradicionalmente, se han utilizado estaciones fijas de monitoreo, 
            pero se necesita desarrollar soluciones móviles y autónomas para abarcar áreas 
            de difícil acceso y adaptarse a cambios ambientales. El uso de carritos con 
            sensores integrados permite recolectar datos en tiempo real, identificar patrones 
            y tendencias, y tomar acciones preventivas. Además, una interfaz intuitiva 
            facilita la visualización y análisis de datos para la toma de decisiones 
            informadas por parte de investigadores y autoridades locales.</h3>


            <br><br>
            <div>
                <p><h1>Objetivo General</h1></p>  
                <div>
                    <h3 style="text-align:center">El objetivo es desarrollar un sistema de monitoreo 
                        ambiental que utilice un carrito controlado por ESP32. Este sistema integrará 
                        los sensores DHT11 y MQ9 para recopilar datos precisos sobre temperatura, 
                        humedad y concentración de gases. El propósito es realizar un seguimiento 
                        en tiempo real de la calidad del aire en diferentes ubicaciones. Además, 
                        el carrito deberá contar con la capacidad de enviar notificaciones o 
                        alertas a través de una interfaz de usuario o comunicación inalámbrica 
                        en caso de detectar condiciones inseguras o anormales en el entorno.</h3>
                </div>
                
            </div>

                <br><br>
                <p><h1>Objetivo Especificos</h1></p>  
                <h3 style="text-align:justify">* Diseñar y construir el carrito de monitoreo que pueda ser controlado de forma remota a través del ESP32, permitiendo el desplazamiento del sistema de monitoreo a diferentes ubicaciones para recopilar datos ambientales. <br><br>
                    * Desarrollar una interfaz de usuario intuitiva y fácil de usar que permita visualizar los datos recopilados por los sensores en tiempo real, mostrando la temperatura, humedad y concentración de gases de manera clara y legible. <br><br>
                    * Realizar un análisis de los datos recopilados por los sensores para realizar análisis y evaluaciones de la calidad del aire en diferentes ubicaciones, identificando posibles fuentes de contaminación o áreas de mejora en términos de ventilación y control de gases.</h3>

                   
                    <br><br><br><br><br><br><br><br>
</div>
<head>
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        p {
            color: #666666;
            text-align: center;
            font-size: 18px;
        }

        span {
            color: #ff0000;
            font-weight: bold;
        }
    </style>
    <script>
        // Obtén el valor actual del contador almacenado en el almacenamiento local
        var contador = localStorage.getItem('contador');

        // Si no hay un contador almacenado, inicialízalo a 0
        if (!contador) {
            contador = 0;
        }

        // Incrementa el contador en 1
        contador++;

        // Actualiza el valor del contador en el almacenamiento local
        localStorage.setItem('contador', contador);    </script>
</head>
<body>
    <h3 style="text-align:right">Contador de visitas</h3>
    <p><h5 style="text-align:right"> Esta página ha sido visitada 
        <span id="contador"></span> veces.</h5></p>

    <script>
        // Muestra el contador en la elemento span del HTML
        document.getElementById('contador').textContent = contador;
    </script>
</body>
</body>
</html>