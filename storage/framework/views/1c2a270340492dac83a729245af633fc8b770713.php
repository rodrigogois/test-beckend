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
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        
    
    </head>


    <body>

        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Curso</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                            mdl-textfield--floating-label mdl-textfield--align-right">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                            <i class="material-icons">search</i>
                        </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="search">
                    </div>
                    
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Curso</span>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <div class="mdl-grid" id="result">
                    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mdl-cell mdl-cell--4-col">
                            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__supporting-text">
                                    <?php echo e($curso->category); ?>

                                </div>
                                <div class="mdl-card__title">
                                    <h2 class="mdl-card__title-text"><?php echo e($curso->title); ?></h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <?php echo e($curso->city); ?>

                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a href="<?php echo e(route('curso.show',  $curso->id)); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                    Detalhes
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

<script type="text/javascript">
$(document).ready(function() {  
$("#search").on('keyup', pesquisar);
	function pesquisar() {
		var query_value = $("#search").val();
            if(query_value == ''){
              query_value = 'a';
            }
                $.get('/busca/'+ query_value, function(data){
                    console.log(data);
                    $('#result').empty();
                    $.each(data, function(key, value){
                        console.log(data[key].id);
                        var id = data[key].id;
                        var html = "<div class='mdl-cell mdl-cell--4-col'>";
                            html += "<div class='demo-card-wide mdl-card mdl-shadow--2dp'>";
                            html += "<div class='mdl-card__supporting-text'>";
                            html +=     data[key].category;
                            html += "</div>";
                            html += "<div class='mdl-card__title'>";
                            html += "<h2 class='mdl-card__title-text'>";
                            html += data[key].title;
                            html += "</h2>";
                            html += "</div>";
                            html += "<div class='mdl-card__supporting-text'>";
                            html += data[key].city;
                            html += "</div>";
                            html += "<div class='mdl-card__actions mdl-card--border'>";
                            html += "<a href='/"+ id +"' class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect'>";
                            html += "Detalhes";
                            html += "</a></div></div></div>";

                        $('#result').append(html);
                    });
                });
           
	}
});
</script>

            </main>
        </div>
    </body>
</html>
