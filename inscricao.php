<?php $acao = 'inscricao';?>
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
        <script src="js/jquery.maskedinput.min.js"></script>
        <script>
$(document).ready(function(){
    $('table tbody tr').tooltip({
        trigger: 'hover'
    });
    $('#cpf').mask('999.999.999-99');
    $('#celular').mask('(99) 99999-9999');

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
                                <li><a href="index.php">PROGRAMAÇÃO</a></li>
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

        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
            
                    <h1 class="tit w-100 mb-5"><span>FORMULÁRIO DE INSCRIÇÃO</span></h1>

                    <form id="cadInscrito">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" name="cpf" class="form-control" required />
                            </div>
                        </div>
                    </div>

                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="celular" id="celular" name="celular" class="form-control" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instituicao">Instituição</label>
                                <input type="instituicao" id="instituicao" name="instituicao" class="form-control" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="curso">Curso</label>
                                <input type="curso" id="curso" name="curso" class="form-control" required />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="uf" id="uf" required>
                                    <option value="">Selecione</option>
                                        <?php
                                            $estadosBrasileiros = array(
    'AC'=>'Acre','AL'=>'Alagoas','AP'=>'Amapá','AM'=>'Amazonas','BA'=>'Bahia','CE'=>'Ceará','DF'=>'Distrito Federal','ES'=>'Espírito Santo','GO'=>'Goiás','MA'=>'Maranhão','MT'=>'Mato Grosso',
    'MS'=>'Mato Grosso do Sul','MG'=>'Minas Gerais','PA'=>'Pará','PB'=>'Paraíba','PR'=>'Paraná','PE'=>'Pernambuco','PI'=>'Piauí','RJ'=>'Rio de Janeiro','RN'=>'Rio Grande do Norte','RS'=>'Rio Grande do Sul','RO'=>'Rondônia','RR'=>'Roraima','SC'=>'Santa Catarina','SP'=>'São Paulo','SE'=>'Sergipe','TO'=>'Tocantins');?>

                                        <? foreach($estadosBrasileiros as $sigla=>$nome){
                                            echo '<option value="'.$sigla.'">'.$nome.'</option>';
                                        }?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" name="cidade" class="form-control" id="cidade" required />
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="tit2">Selecione o evento que deseja participar</h3>
                    <div id="evento">
                        <table class="table table-bordered table-sm table-hover listacurso" bgcolor="#FFF">
                            <thead>
                                <th></th>
                                <th>Nome</th>
                                <th>Título</th>
                                <th>Data</th>
                                <th>Horário</th>
                            </thead>
                        
                            <?php $hoje = date("Y-m-d"); ?>
                            <tbody id="dia1">
                                <?php while($d1 = $bp23->fetch(PDO::FETCH_ASSOC)):?>
                                    <?php $horaevento = $d1['data']; ?>
                                    <tr data-toggle="tooltip" data-html="true" title="<?php echo "Responsável: ".$d1['responsavel']." - Local: ".$d1['local'];?>">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input <?php echo $d1['tipo'];?> cb position-static" id="cb<?php echo $d1['id']?>" name="eventos[]" type="checkbox" data-seq="<?php echo $d1['sequencia'];?>" value="<?php echo $d1['id'];?>" <?php if(($d1['conta'] >= $d1['qtyvagas']) || ($hoje > $horaevento)){echo "disabled";}?>>
                                            </div>
                                        </td>
                                        <td><?php echo $d1['nome'];?> <?php if($d1['conta'] >= $d1['qtyvagas']) {echo '<span class="badge badge-danger">Lotado</span>';}?></td>
                                        <td><?php echo $d1['titulo'];?></td>
                                        <td class="data"><?php echo formataData($d1['data'], 'user');?></td>
                                        <td class="horario"><?php echo $d1['horario'];?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tbody id="dia2">
                                <?php while($d2 = $bp24->fetch(PDO::FETCH_ASSOC)):?>
                                <?php $horaevento = $d2['data']; ?>
                                    <tr data-toggle="tooltip" data-html="true" title="<?php echo "Responsável: ".$d2['responsavel']." - Local: ".$d2['local'];?>">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input <?php echo $d2['tipo'];?> cb position-static"  id="cb<?php echo $d2['id']?>" name="eventos[]" type="checkbox" data-seq="<?php echo $d2['sequencia'];?>" value="<?php echo $d2['id'];?>" <?php if(($d2['conta'] >= $d2['qtyvagas'])  || ($hoje > $horaevento)){echo "disabled";}?>>
                                            </div>
                                        </td>
                                        <td><?php echo $d2['nome'];?> <?php if($d2['conta'] >= $d2['qtyvagas']) {echo '<span class="badge badge-danger">Lotado</span>';}?></td>
                                        <td><?php echo $d2['titulo'];?></td>
                                        <td class="data"><?php echo formataData($d2['data'], 'user');?></td>
                                        <td class="horario"><?php echo $d2['horario'];?></td>
                                    </tr>
                                <?php endwhile; ?>

                            </tbody>
                            <tbody id="dia3">
                                <?php while($d3 = $bp25->fetch(PDO::FETCH_ASSOC)):?>
                                <?php $horaevento = $d3['data']; ?>
                                    <tr data-toggle="tooltip" data-html="true" title="<?php echo "Responsável: ".$d3['responsavel']." - Local: ".$d3['local'];?>">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input <?php echo $d3['tipo'];?> cb position-static" name="eventos[]" id="cb<?php echo $d3['id']?>" type="checkbox" data-seq="<?php echo $d3['sequencia'];?>" value="<?php echo $d3['id'];?>" <?php if(($d3['conta'] >= $d3['qtyvagas'])  || ($hoje > $horaevento)){echo "disabled";}?>>
                                            </div>
                                        </td>
                                        <td><?php echo $d3['nome'];?> <?php if($d3['conta'] >= $d3['qtyvagas']) {echo '<span class="badge badge-danger">Lotado</span>';}?></td>
                                        <td><?php echo $d3['titulo'];?></td>
                                        <td class="data"><?php echo formataData($d3['data'], 'user');?></td>
                                        <td class="horario"><?php echo $d3['horario'];?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tbody id="dia4">
                                <?php while($d4 = $bp30->fetch(PDO::FETCH_ASSOC)):?>
                                <?php $horaevento = $d4['data']; ?>
                                    <tr data-toggle="tooltip" data-html="true" title="<?php echo "Responsável: ".$d4['responsavel']." - Local: ".$d4['local'];?>">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input <?php echo $d4['tipo'];?> cb position-static"  id="cb<?php echo $d4['id']?>" name="eventos[]" type="checkbox" data-seq="<?php echo $d4['sequencia'];?>" value="<?php echo $d4['id'];?>" <?php if(($d4['conta'] >= $d4['qtyvagas'])  || ($hoje > $horaevento)){echo "disabled";}?>>
                                            </div>
                                        </td>
                                        <td><?php echo $d4['nome'];?> <?php if($d4['conta'] >= $d4['qtyvagas']) {echo '<span class="badge badge-danger">Lotado</span>';}?></td>
                                        <td><?php echo $d4['titulo'];?></td>
                                        <td class="data"><?php echo formataData($d4['data'], 'user');?></td>
                                        <td class="horario"><?php echo $d4['horario'];?></td>
                                    </tr>
                                <?php endwhile; ?>

                            </tbody>
                            <tbody id="dia5">
                                <?php while($d5 = $bp31->fetch(PDO::FETCH_ASSOC)):?>
                                <?php $horaevento = $d5['data']; ?>
                                    <tr data-toggle="tooltip" data-html="true" title="<?php echo "Responsável: ".$d5['responsavel']." - Local: ".$d5['local'];?>">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input <?php echo $d5['tipo'];?> cb position-static" name="eventos[]" id="cb<?php echo $d5['id']?>" type="checkbox" data-seq="<?php echo $d5['sequencia'];?>" value="<?php echo $d5['id'];?>" <?php if(($d5['conta'] >= $d5['qtyvagas'])  || ($hoje > $horaevento)){echo "disabled";}?>>
                                            </div>
                                        </td>
                                        <td><?php echo $d5['nome'];?> <?php if($d5['conta'] >= $d5['qtyvagas']) {echo '<span class="badge badge-danger">Lotado</span>';}?></td>
                                        <td><?php echo $d5['titulo'];?></td>
                                        <td class="data"><?php echo formataData($d5['data'], 'user');?></td>
                                        <td class="horario"><?php echo $d5['horario'];?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg" id="enviaFrm" value="Finalizar Inscrição">
                        Enviar inscrição
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display:none"></span>
                    </button>
                </form>
                </div>
            </div>
        </div>


    </body>
</html>