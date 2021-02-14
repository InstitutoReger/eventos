<?php require_once('ctrl/ctrlSite.php');?>
<!doctype html>
<html lang="pt-br">
    <head>

        <!-- Required meta tags -->
        <meta http-equiv="Content-Language" content="pt-br">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="js/bs.js"></script>
        <script src="js/fx.js"></script>
        <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Folha de estilos -->
        <link rel="stylesheet" href="css/mostra.css" />
        <link rel="stylesheet" href="css/animate.css" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Exo+2:400,600,700,800&display=swap" rel="stylesheet">

        <title>1ª Semana de Ciência e Tecnologia, Bioeconomia e Sustentabilidade do ITEGO Governador Onofre Quinan dos COTECs de Abadiânia e Alexânia</title>
    </head>

    <body class="animated fadeIn">
        
        <header class="container-fluid pt-5 pb-4 animated fadeInDown">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <a href="/mostragoq"><img src="img/logo.png"></a>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="row">
                            <img src="img/logos_governo.png" />
                        </div>

                        <div class="row">
                            <ul>
                                <li><a href="#programacao">PROGRAMAÇÃO</a></li>
                                <li><a href="inscricao.php">INSCRIÇÕES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid animated slideInLeft">
            <div class="container">
                <div class="row">
                    <h3 class="titulo w-100 text-center animated fadeIn delay-1s">21 a 23 de outubro de 2019 <div class="square"></div>ENTRADA GRATUITA</h3>
                    <h4 class="titulo w-100 text-center animated fadeIn delay-1s">COTEC Alexânia | Rua 22 Qd 34 Lt 05 - Centro</h4>
                    <h4 class="titulo w-100 text-center animated fadeIn delay-1s">COTEC Abadiânia | Colégio Estadual Osório Rodrigues Camargo Av. Goiás Qd S. 19 a 24 Centro</h4>
                </div>
            </div>
        </div>

        <div class="separador pt-3 pb-3"></div>


        <div class="container mt-5 mb-5" id="programacao"><div class="row"><div class="col-md-12">
            
            <h1 class="tit w-100 mb-5"><span>PROGRAMAÇÃO</span></h1>

            <div class="tab" role="tabpanel">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="seg-tab" data-toggle="tab" href="#seg" role="tab" aria-controls="seg" aria-selected="true">21/10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ter-tab" data-toggle="tab" href="#ter" role="tab" aria-controls="ter" aria-selected="false">22/10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="qua-tab" data-toggle="tab" href="#qua" role="tab" aria-controls="qua" aria-selected="false">23/10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="qua30-tab" data-toggle="tab" href="#qua30" role="tab" aria-controls="qua30" aria-selected="false">30/10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="qui31-tab" data-toggle="tab" href="#qui31" role="tab" aria-controls="qui31" aria-selected="false">31/10</a>
                    </li>
                </ul>

                <div class="tab-content tabs" id="myTabContent">
                <div class="tab-content tabs" id="myTabContent">
                    <div class="tab-pane fade show active" id="seg" role="tabpanel" aria-labelledby="seg-tab">
                        <?php
                            $hor = '';
                            while($r23 = $bp23->fetch(PDO::FETCH_ASSOC)):

                                if($hor != $r23['horario']):
                                    echo "<h4>".$r23['horario']."</h4>";
                                    $hor = $r23['horario'];
                                endif;

                                echo "<strong>".$r23['nome']."</strong> - ".$r23['responsavel']."<br><br>";
                            endwhile;
                        ?>
                    </div>


                    <div class="tab-pane fade" id="ter" role="tabpanel" aria-labelledby="ter-tab">
                    <?php
                            $hor = '';
                            while($r24 = $bp24->fetch(PDO::FETCH_ASSOC)):
                                
                                if($hor != $r24['horario']):
                                    echo "<h4>".$r24['horario']."</h4>";
                                    $hor = $r24['horario'];
                                endif;

                                echo "<strong>".$r24['nome']."</strong> - ".$r24['responsavel']."<br>";
                            endwhile;
                        ?>
                    </div>

                    <div class="tab-pane fade" id="qua" role="tabpanel" aria-labelledby="qua-tab">
                    <?php
                            $hor = '';
                            while($r25 = $bp25->fetch(PDO::FETCH_ASSOC)):
                                
                                if($hor != $r25['horario']):
                                    echo "<h4>".$r25['horario']."</h4>";
                                    $hor = $r25['horario'];
                                endif;

                                echo "<strong>".$r25['nome']."</strong> - ".$r25['responsavel']."<br>";
                            endwhile;
                        ?>
                    </div>

                    <div class="tab-pane fade" id="qua30" role="tabpanel" aria-labelledby="qua30-tab">
                    <?php
                            $hor = '';
                            while($r30 = $bp30->fetch(PDO::FETCH_ASSOC)):
                                
                                if($hor != $r30['horario']):
                                    echo "<h4>".$r30['horario']."</h4>";
                                    $hor = $r30['horario'];
                                endif;

                                echo "<strong>".$r30['nome']."</strong> - ".$r30['responsavel']."<br>";
                            endwhile;
                        ?>
                    </div>

                    <div class="tab-pane fade" id="qui31" role="tabpanel" aria-labelledby="qui31-tab">
                    <?php
                            $hor = '';
                            while($r31 = $bp31->fetch(PDO::FETCH_ASSOC)):
                                
                                if($hor != $r31['horario']):
                                    echo "<h4>".$r31['horario']."</h4>";
                                    $hor = $r31['horario'];
                                endif;

                                echo "<strong>".$r31['nome']."</strong> - ".$r31['responsavel']."<br>";
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </body>
</html>