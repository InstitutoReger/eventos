<?php
    require_once('class.PDO.php');

    $pdo = Database::conexao();

    $bp23 = $pdo->prepare('SELECT *, (SELECT COUNT(*) FROM imostra_inscritos i WHERE i.evento = v.id) as conta FROM vagas v WHERE data = :data1 ORDER BY id ASC');
    $bp23 -> bindValue(':data1','2019-10-21');
    $bp23 -> execute();

    $bp24 = $pdo->prepare('SELECT *, (SELECT COUNT(*) FROM imostra_inscritos i WHERE i.evento = v.id) as conta FROM vagas v WHERE data = :data1');
    $bp24 -> bindValue(':data1','2019-10-22');
    $bp24 -> execute();

    $bp25 = $pdo->prepare('SELECT *, (SELECT COUNT(*) FROM imostra_inscritos i WHERE i.evento = v.id) as conta FROM vagas v WHERE data = :data1');
    $bp25 -> bindValue(':data1','2019-10-23');
    $bp25 -> execute();

    $bp30 = $pdo->prepare('SELECT *, (SELECT COUNT(*) FROM imostra_inscritos i WHERE i.evento = v.id) as conta FROM vagas v WHERE data = :data1 ORDER BY horario ASC');
    $bp30 -> bindValue(':data1','2019-10-30');
    $bp30 -> execute();

    $bp31 = $pdo->prepare('SELECT *, (SELECT COUNT(*) FROM imostra_inscritos i WHERE i.evento = v.id) as conta FROM vagas v WHERE data = :data1');
    $bp31 -> bindValue(':data1','2019-10-31');
    $bp31 -> execute();

    if(isset($_REQUEST['acao'])){
        if($_REQUEST['acao'] == 'inscricao'){
            
            if(!isset($_POST['eventos'])){
                $result = array(
                    'tipo' => 'error',
                    'msg'  => 'Você deve selecionar os eventos que deseja participar'
                );
            }else {
                foreach($_POST['eventos'] as $value){
                    $validacao = $pdo->prepare('SELECT * FROM imostra_inscritos WHERE cpf = :cpf AND evento = :evento' );
                    $validacao -> bindValue(':cpf', $_POST['cpf']);
                    $validacao -> bindValue(':evento', $value);
                    $validacao -> execute();
                }
                
                if($validacao -> rowCount() > 0) {
                    $result = array(
                        'tipo' => 'error',
                        'msg'  => 'Você não pode se inscrever em um evento duas vezes'
                    );
                }
                else {
                    
                /*if($cpf->rowCount() > 0){
                    $result = array(
                        'tipo' => 'error',
                        'msg'  => 'Já existe uma inscrição para o CPF informado'
                    );
               } else {*/
                    try{

                        $cursos = array();
                        // verifica se os cursos selecionados já atingiram a quantidade máxima de inscrições
                        
                        foreach($_POST['eventos'] as $value){
                            $con = $pdo->prepare('SELECT COUNT(evento) as cnt FROM imostra_inscritos WHERE evento = :idevento');
                            $con -> bindValue(':idevento', $value);
                            $con -> execute();
                            $c = $con->fetch(PDO::FETCH_ASSOC);

                            $con2 = $pdo->prepare('SELECT nome, qtyvagas FROM vagas WHERE id = :idevento');
                            $con2 -> bindValue(':idevento', $value);
                            $con2 -> execute();
                            $d = $con2->fetch(PDO::FETCH_ASSOC);

                            $erro = 0;

                            if($c['cnt'] >= $d['qtyvagas']){
                                throw new Exception('O curso '.$d['nome'].' já atingiu a quantidade máxima de inscritos');
                                $erro++;
                            }

                            $cursos[] = array(
                                'nome' => $d['nome']
                            );
                            
                        }

                        // se todos os cursos tiverem vagas disponíveis, então insere no banco
                        if($erro == 0){
                            foreach($_POST['eventos'] as $value){
                                $ins = $pdo->prepare('INSERT INTO imostra_inscritos (nome, cpf, email, celular, instituicao, curso, cidade, estado, evento) VALUES(:nome, :cpf, :email, :celular, :instituicao, :curso, :cidade, :estado, :evento)');
                                $ins -> bindValue(':nome', $_POST['nome']);
                                $ins -> bindValue(':cpf', $_POST['cpf']);
                                $ins -> bindValue(':email', $_POST['email']);
                                $ins -> bindValue(':celular', $_POST['celular']);
                                $ins -> bindValue(':instituicao', $_POST['instituicao']);
                                $ins -> bindValue(':curso', $_POST['curso']);
                                $ins -> bindValue(':cidade', $_POST['cidade']);
                                $ins -> bindValue(':estado', $_POST['uf']);
                                $ins -> bindValue(':evento', $value);
                                
                                if($ins -> execute()){
                                    $result = array(
                                        'tipo' => 'success',
                                        'msg'  => 'Sua inscrição foi realizada'
                                    );
                                } // fim ins->execute
                            } // fim foreach

                            $quebra_linha = "\n";
                            $emailsender = "contato@itego.com.br";
            
                            $headers = "MIME-Version: 1.1\n";
                            $headers .= "Content-type: text/html; charset=UTF-8\n";
                            $headers .= "From: ITEGO <contato@itego.com.br>\n"; // remetente
                            $headers .= "Return-Path: contato@itego.com.br\n"; // return-path
                            
            
                            $msg  = '';
                            $msg .= '<img src="http://itego.com.br/semanact/img/logomail.png" /><br>';
                            $msg .= '<b>Nome:</b> '.$_POST['nome'].'<br>';
                            $msg .= '<b>CPF:</b> '.$_POST['cpf'].'<br>';
                            $msg .= '<b>Celular:</b> '.$_POST['celular'].'<br>';
                            $msg .= '<b>Instituição:</b> '.$_POST['instituicao'].'<br>';
                            $msg .= '<b>Curso:</b> '.$_POST['curso'].'<br>';
                            $msg .= '<b>Cidade:</b> '.$_POST['cidade'].'<br>';
                            $msg .= '<b>Estado:</b> '.$_POST['uf'].'<br><br>';
                            $msg .= 'Você se inscreveu nos cursos:<br>';

                            foreach($cursos as $v){
                                $msg .= $v['nome'].' - '.$v['responsavel'].'<br>';
                            }


                            if(!mail($_POST['email'], 'Confirmação de inscrição', $msg, $headers ,"-r".$emailsender)){ // Se for Postfix
                                mail($_POST['email'], 'Confirmação de inscrição', $msg, $headers );
                            }
                        }// fim if erro == 0
                    } // fim try
                    catch(Exception $e){
                        $result = array(
                            'tipo' => 'error',
                            'msg'  => $e->getMessage()
                        );
                    }
               // } // fim verificação cpf $cpf->rowCount() > 0
                }

            } // fim else !isset($_POST['eventos']
            echo json_encode($result);
        } //fim $_REQUEST['acao'] == 'inscricao'
    }

function formataData($dataInput, $destino){
  //pega a data do campo no formato pt-br e transforma para o formato do mysql
    if($destino == 'db'){
        $data = explode('/', $dataInput);
        $dia = $data['0'];
        $mes = $data['1'];
        $ano = $data['2'];
        $datafinal = $ano.'-'.$mes.'-'.$dia;
    }

  //pega a data do mysql e transforma para o formato pt-br
    if($destino == 'user'){
        $data = explode('-', $dataInput);
        $dia = $data['2'];
        $mes = $data['1'];
        $ano = $data['0'];
        $datafinal = $dia.'/'.$mes.'/'.$ano;
    }
    return $datafinal;
}
?>
