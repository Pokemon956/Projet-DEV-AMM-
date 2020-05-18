<?php
require 'uploadFile.php';

$upd = new uploadFile();
print_r($upd);
print_r($_POST);
print_r("$ <br>");
if (isset($_POST['Envoyer']) && !empty($_POST['Envoyer']) ) {
    print_r("$$ <br>");

    $tmp_name = $_FILES['upload']['tmp_name'];
    $name = $_FILES['upload']['name'];
    
    $nomduboug = "Wanabilini";
    $upd->uploadAudio($tmp_name,$name, $nomduboug);
    print_r("$$$$ <br>");
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Bootstrap 4 Minimal Template</title>

        <link rel="shortcut icon" href="" type="image/x-icon">
        <link rel="apple-touch-icon" href="">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <!-- Link to your css file -->
        <link rel="stylesheet" href="">

        <style>
            /*
            *
            * ==========================================
            * CUSTOM UTIL CLASSES
            * ==========================================
            *
            */
            #upload {
                opacity: 0;
            }

            #upload-label {
                position: absolute;
                top: 50%;
                left: 1rem;
                transform: translateY(-50%);
            }

            .image-area {
                border: 2px dashed rgba(255, 255, 255, 0.7);
                padding: 1rem;
                position: relative;
            }

            .image-area::before {
                content: 'Uploaded image result';
                color: #fff;
                font-weight: bold;
                text-transform: uppercase;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 0.8rem;
                z-index: 1;
            }

            .image-area img {
                z-index: 2;
                position: relative;
            }

            /*
            *
            * ==========================================
            * FOR DEMO PURPOSES
            * ==========================================
            *
            */
            body {
                min-height: 100vh;
                background-color: #757f9a;
                background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
            }

            /*
        </style>
    </head>

    <body>
        <!-- Start coding here -->
        <div class="container py-5">

            <!-- For demo purpose -->
            <header class="text-white text-center">
                <h1 class="display-4">Bootstrap image upload</h1>
                <p class="lead mb-0">Build a simple image upload button using Bootstrap 4.</p>
                <p class="mb-5 font-weight-light">Snippet by
                    <a href="https://bootstrapious.com" class="text-white">
                        <u>Bootstrapious</u>
                    </a>
                </p>
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="150" class="mb-4">
            </header>


            <div class="row py-4">
                <div class="col-lg-6 mx-auto">
                    <form id='formUpload1' action="" method="post" enctype="multipart/form-data">

                        <input name="upload" type="file" class="form-control border-0">
                        <input type="submit" name="Envoyer" value='SUBMIt'>
                    </form>

                    <!-- Upload image input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <form id='formUpload1' action="" method="get" enctype="multipart/form-data">

                            <input id="upload" type="file" onchange="readURL(this);goFile(this);" class="form-control border-0">
                        </form>
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                        <div class="input-group-append">

                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>

                        </div>

                    </div>

                    <!-- Uploaded image area-->
                    <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                    <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                </div>
            </div>
        </div>
        <!-- Coding End -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            /*  ==========================================
                SHOW UPLOADED IMAGE
                    * ========================================== */
            function readURL(input) {
                console.log(input);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imageResult')
                            .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }



            /*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
            var input = document.getElementById( 'upload' );
            var infoArea = document.getElementById( 'upload-label' );


            input.addEventListener( 'change', showFileName );

            function showFileName( event ) {
                var input = event.srcElement;
                var fileName = input.files[0].name;
                infoArea.textContent = 'File name: ' + fileName;
            }

        </script>
    </body>
</html>
<?php 
var_dump($_FILES);
?>