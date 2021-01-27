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
    <?php require "home/home-carousel.php";?>
    <?php require "home/home-productos.php";?>
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

            formData = new FormData()
            formData.append('emailDestino',emailUsuario.value)
            
            $.ajax({
                method: 'post',
                url: 'principal/enviar_email',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false
            }).always(()=>{
                swal('Proceso exitoso','revisa la bandeja de tu gmail','success')
            })        

        }else{
            $('#emailUsuario').addClass('is-invalid')

            setTimeout(() => {
            $('#emailUsuario').removeClass('is-invalid')
            }, 3000);
        }
    });

</script>