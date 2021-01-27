<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "base/head.php";?>
    <meta charset="UTF-8">
    <style>
        <?php require "css/carousel.css";?>
    </style>
</head>
<body>
    <?php require "general/navegacion.php"; ?>
    <?php require "productos/productos.php";?>
    <?php require "home/modal/contactUs.php";?>
</body>
    <?php require "base/footer.php";?>
</html>
<script>
    let btnConsultas = document.getElementById('btnConsultas')

    btnConsultas.addEventListener('click',()=>{
        
    let emailUsuario = document.getElementById('emailUsuario')

        if(emailUsuario.value != ''){
        $('#emailUsuario').addClass('is-valid')
        setTimeout(() => {
            $('#emailUsuario').removeClass('is-valid')
            emailUsuario.value = ''
        }, 3000);
        }else{
            $('#emailUsuario').addClass('is-invalid')

            setTimeout(() => {
            $('#emailUsuario').removeClass('is-invalid')
            }, 3000);
        }
    });
</script>