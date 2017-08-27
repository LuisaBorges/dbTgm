<ol class="breadcrumb">
	<li class="breadcrumb-item"><a class="testA" <?php print" href=home.php?id=".@$_REQUEST["id"]."&email=".@$_REQUEST["email"]; ?>> <span class="subLink">Home</span> </a></li>
	<li class="breadcrumb-item active">Disciplina</li>
	<li class="breadcrumb-item active">Visualizar Disciplina</li>
</ol>

<h1 class="masterTitulo">Visualizar Disciplina</h1>
<div class="subTitulo"></div>


<?php if(@$_REQUEST["res"]=="deleteok"){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    Disciplina excluida com sucesso!
</div>
<?php }else if(@$_REQUEST["res"]=="updateok"){?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    Disciplina atualizada com sucesso!
</div>
<?php } ?>




<div class="visualizarDocenteDivClass">
    <table class="table table-bordered table-striped">
    <thead>
        <tr class="bg-primary">
        <th>Nome</th>
        <th>Carga horaria</th>
        <th>Editar</th>
        <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
            <?php
                //include("config.php");
                
                $sql = "SELECT * FROM `disciplina` JOIN `usuarios` ON disciplina.usuarios_id_usuarios = '".$_REQUEST["id"]."'";
                //die($sql);
                $result = $conn->query($sql);
                $i = 0;
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $i++;
                        print "<tr>";
                        print "
                            <td>".$row["nome_disciplina"]."</td>
                            <td>".$row["cod_cargaHoraria"]." Horas/aula</td>
                            <td class='centralizaIcone'><a href='?page=editar-disciplina&id=".$_REQUEST["id"]."&email=".$_REQUEST["email"]."&id_disciplina=".$row["id_disciplina"]."' ><button type='button' class='btn btn-light testbtn'><i id='iconeEditar' class='fa fa-pencil-square-o fa-lg' aria-hidden='true'></i></button></a></td>
                            <td class='centralizaIcone'><button type='button' class='btn btn-light testbtn' data-toggle='modal' data-target='#confirm".$i."'><i id='iconeExcluir' class='fa fa-ban fa-lg' aria-hidden='true'></i></button></td>";
                        print "</tr>";
                        print "
                        <div class='modal fade' id='confirm".$i."' role='dialog'>
                          <div class='modal-dialog modal-md'>

                            <div class='modal-content'>
                              <div class='modal-body'>
                                    <p> Você realmente deseja excluir o(a) disciplina de ".$row["nome_disciplina"]."?</p>
                              </div>
                              <div class='modal-footer'>
                                <a href='salvar.php?acao=exclusao-disciplina&id=".$_REQUEST["id"]."&id_disciplina=".$row["id_disciplina"]."' type='button' class='btn btn-danger' id='delete'>Excluir disciplina</a>
                                <button type='button' data-dismiss='modal' class='btn btn-default'>Fechar</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        ";
                    }
               
            ?>
    </tbody>
    </table>
    <?php
        }else{
            print "
            <div class='alert alert-info' role='alert'>
                Sem Docentes cadastrados
            </div>";
        }

    ?>
</div>