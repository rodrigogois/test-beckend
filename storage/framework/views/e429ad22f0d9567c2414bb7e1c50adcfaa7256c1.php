<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-light_blue.min.css" />
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        
    <style>
    body {
        margin: 0px
    }
    .container {
        width: 100vw;
        height: 100vh;
        background: white;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding-top: 13px;
    }
    .box{
        width: 35em;
        height: 35em;
        padding-top: 13px;
    }
    
    </style>
    </head>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <a href="<?php echo e(route('curso.index')); ?>"><i class="material-icons">keyboard_backspace</i></a>
                </div>
            </header>
            <main class="mdl-layout__content">
                <div class="page-content container">
                    <div class="mdl-grid">
                        <div class="demo-card-square mdl-card mdl-shadow--2dp box"  >
                            <div class="mdl-card__title mdl-card--expand">
                                <h2 class="mdl-card__title-text"><?php echo e($curso->title); ?></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <?php echo e($curso->description); ?>

                            </div>
                        
                            <div class="mdl-card__supporting-text">
                                <i class="material-icons">date_range</i> <?php echo e(date('d/m/Y', strtotime($curso->start))); ?>

                            </div>    
                            <div class="mdl-card__supporting-text">
                                <i class="material-icons">schedule</i> <?php echo e($intervalo); ?>

                            </div>
                            <div class="mdl-card__supporting-text">
                                <i class="material-icons">room</i> <?php echo e($curso->street.", ". $curso->number ." - ".$curso->city); ?>

                            </div>
                            <div class="mdl-card__supporting-text">
                                <i class="material-icons">attach_money</i> <?php echo e($curso->price); ?>

                            </div>
                            <div class="mdl-card__supporting-text">
                                <i class="material-icons">label</i> <?php echo e($curso->category); ?>

                            </div>
                            <div class="mdl-card__supporting-text">
                                <img src="<?php echo e($curso->avatar); ?>" style="border-radius: 50%;" height="42" width="42"> <?php echo e($curso->name); ?>

                            </div>
                            <p>
                            <div class="mdl-card__actions mdl-card--border">
                                <button class="mdl-button mdl-js-button mdl-button--raised">
                                    Inscrição
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
