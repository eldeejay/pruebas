<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/grid-gallery.css" />
    <link rel="stylesheet" href="css/glightbox.min.css" />
    <link rel="stylesheet" href="css/glightbox-config.css" />
</head>

<body>
    <section class="contenedor">
        <div class="grid-container" id="fotos"></div>
    </section>
    <!--Aqui se cuentan el total de imagenes en el directorio y se pasa ese numero a la variable "n" en el codigo JS -->
    <?php
    $total_imagenes = count(glob('../cssgridgallery/rz/{*.jpg,*.gif,*.png}', GLOB_BRACE));
    ?>
    <script type="text/javascript">
        /* Aqui creamos random de miniatura de foto: si va alargada, alta, o normal*/
        let tiposSpandax = ["", "", "tall", "", "", "wide"];
        /* Aqui deplegamos fotos*/
        let n = "<?php echo $total_imagenes; ?>";
        let fotogaleria = document.getElementById("fotos");
        for (let i = 1; i <= n; i++) {
            let j = Math.floor(Math.random() * (5 - 0 + 1)) + 1;
            normalWideTall = tiposSpandax[j];
            fotogaleria.innerHTML +=
                '<a href="cachitocielo/img' +
                i +
                '.jpg" class="glightbox ' + normalWideTall + '"><img src="rz/' +
                i +
                '.jpg" alt="image" />';
        }
    </script>

    <script src="js/glightbox.min.js"></script>
    <script>
        const nav = document.createElement("div");
        nav.classList.add("gcounter");
        nav.dataset.indicator = "/";

        const slides = GLightbox({
            onOpen: () => slides.modal.appendChild(nav),
            afterSlideChange: function(prev, next) {
                nav.dataset.indicator = `${next.index + 1} / ${
            slides.elements.length
          }`;
                nav.classList.add("gcounter-added");
            },
        });
    </script>
</body>

</html>