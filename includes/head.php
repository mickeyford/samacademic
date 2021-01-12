<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL; ?>/public/css/sidebar.css">

    <link rel="apple-touch-icon" href="<?php echo URL; ?>/public/images/logo180x180.png" sizes="180x180">
    <link rel="icon" href="<?php echo URL; ?>/public/images/logo32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?php echo URL; ?>/public/images/logo16x16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="<?php echo URL; ?>/public/images/logo.svg">
    <link rel="icon" href="<?php echo URL; ?>/public/images/logo.ico">
    <link rel="shortcut icon" href="<?php echo URL; ?>/public/images/logo.ico" />
    <meta name="theme-color" content="#0d6efd">
    <style>
    .alto {
        min-height: 100vh !important;
    }

    .fondo {
        background-color: #f0f2f5;
    }

    .relleno {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .rounded-p {
        border-radius: 0.25rem !important;
    }

    .rounded-top-p {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important;
    }

    @media (max-width: 440px) {
        .rounded-p {
            border-radius: 0 !important;
        }

        .rounded-top-p {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
        }

        .fondo {
            background-color: white !important;
        }

        .relleno {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .alto {
            min-height: initial !important;
            max-height: 100vh !important;
        }
    }




    .alto-a {
        min-height: 100vh !important;
    }

    .fondo-a {
        background-color: #f0f2f5;
    }

    .relleno-a {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important;
    }

    .rounded-p-a {
        border-radius: 0.25rem !important;
    }

    .rounded-top-p-a {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important;
    }

    @media (max-width: 620px) {
        .rounded-p-a {
            border-radius: 0 !important;
        }

        .rounded-top-p-a {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
        }

        .fondo-a {
            background-color: white !important;
        }

        .relleno-a {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .alto-a {
            min-height: initial !important;
            max-height: 100vh !important;
        }
    }
    </style>
</head>