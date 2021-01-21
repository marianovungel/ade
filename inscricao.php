<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>um pquequeno espoço</title>
<style>
.principal{
    display:grid;
    grid-template-columns:  1fr 3fr 1fr;
    grid-template-rows: 75px 40px auto;
    grid-template-areas:
    "cabecario cabecario cabecario" 
    "nav nav nav" 
    "... conteudo ..."
    
}
.cabecario{
      grid-area: cabecario; 
      background-color: rgb(12, 12, 114);
    }
.nav{
    grid-area: nav;
    background-color: rgb(46, 46, 168); 
}
.conteudo{
    grid-area: conteudo;
    border:1px #000000 solid;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    padding:10px;
    margin-right:1px;
    margin-left:1px;
}
.conteudo{
    display:grid;
    grid-template-columns:1fr 1fr;
    grid-template-rows:1fr 45px;
    grid-template-areas:
    "form1 form2"
    "footer footer"
}
.form1{
  grid-area:form1;
}
.form2{
  grid-area:form2;
}
.footer{
    grid-area:footer;
}
#botao{
    position:relative;
    top:20px;
    left:450px;
}
@media (max-width: 500px){

}


</style>

<script>

</script>
</head>
<body>
<div class="principal">
                        <div class="cabecario">cabeçário</div>
                        <div class="nav">navegação</div>
                       
                        <!--este é a div dos dados em que vai estar todos os dados do perfil do estudante!-->
                        <div class="conteudo">
                                            <form method="GET" action="pee.php" class="form1">
                                                <fieldset id="dados">
            <p>Nome do usuario</p><input type="text" name="anome" id="bnome" size="30" maxlength="40" placeholder="nome de usuario"/>
            <p>escolhe uma palavra passe</p><input type="password" name="asenha1" id="bsenha1" size="30" maxlength="300" placeholder="8 caracteres no mínimo"/>
            <p>confirma a sua senha</p></p><input type="email" name="aemail" id="bamail" size="30" maxlength="300" placeholder="confirma a palavra-passe"/>
            <p>email ou número do celular para recupara a senha</p><input type="email" name="aemail" id="bamail" size="30" maxlength="40" placeholder="seu email"/></p>
            </fieldset>
            <fieldset id="dados"><legend>Dados do responsavel</legend>
                <p>Responsavel financeiro</p><input type="email" name="aemai2" id="bamai2" size="30" maxlength="40" placeholder="seu email"/>
                <p>Cotato telefónico</p><input type="number" name="anumero" id="bnumero" size="22" maxlength="20" placeholder="deixa seu contato">
                <p>Email  actual</p><input type="email" name="aemai2" id="bamai2" size="30" maxlength="40" placeholder="seu email"/>
                <legend>sexo</legend>
                    <input type="radio" name="aradio" id="bradio"/><label for="bradio">masculino</label>
                    <input type="radio" name="aradio" id="bfem"/><label for="bfem">feminino</label>
                    <p>PAI</p><input type="text" name="apai" id="apai" size="30" maxlength="40" placeholder="nome completo"/>
                    <p>MÃE</p><input type="text" name="amae" id="amae" size="30" maxlength="40" placeholder="nome completo"/>
                        
            </fieldset>
</form>
                                                <!--segunda parte dos formulário!-->
                                            <form method="GET" action="pee.php" class="form2">
                                                <fieldset id=dados>
                <p>Nome completo</p><input type="text" name="anome1" id="anome1" size="30" maxlength="40" placeholder="nome completo"/></p>
                <p>Data de nascimento</p><input type="date" name="adata" id="bdata"/></p>
                <p>Nacionalidade</p><select name="aNacionalidade" id="bNacionalidade">
                <option>Angolano</option>
                <option>Guinense</option>
                <option>Caboverdiano</option>
                <option>Moçambicano</option>
                <option>Timorlense</option>
                <option>São tomense</option>
                </select>

                    <p>curso<br><select name="acurso" id="bcurso">
                    <option>Administração Pública</option>
                    <option>Agronomia</option>
                    <option>Antropologia</option>
                    <option>Bacharelado Interdisciplinar em Humanidades</option>
                    <option>Ciências Biológicas – Licenciatura</option>
                    <option>Enfermagem</option>
                    <option>Engenharia de Computação</option>
                    <option>Engenharia de Energias</option>
                    <option>Farmácia</option>
                    <option>Física</option>
                    <option>História</option>
                    <option>Letras – Língua Portuguesa</option>
                    <option>Letras – Língua Inglesa</option>
                    <option>Matemática – Licenciatura</option>
                    <option>Pedagogia – Licenciatura</option>
                    <option>Química – Licenciatura </option>
                    <option>Sociologia – Licenciatura</option>
                    <option>Relações internacionais</option></p>
                    </select>
                </fieldset>
                <fieldset id="dados">
                    <p>BI Nº</p><input type="number" name="anum" id="anum" size="30" maxlength="40" placeholder="bilhete de identidade"/>
                    <p>Nº do passaporte</p><input type="number" name="anum" id="anum" size="30" maxlength="40" placeholder="número do passaporte"/>
                    <p>Número telefónico</p><input type="number" name="anum1" id="anum1" size="30" maxlength="40" placeholder="número do celular"/>
                    <p>Responsavel financeiro</p><input type="text" name="ares" id="ares" size="30" maxlength="40" placeholder="nome completo"/>
                    <p>Contato telefónico</p><input type="number" name="anum3" id="anum3" size="30" maxlength="40" placeholder="número do celular"/>
                    <p>Email  actual</p><input type="email" name="aemai2" id="bamai2" size="30" maxlength="40" placeholder="seu email"/>
                    </fieldset>
                                
                                            </form>
                                            <form method="GET" action="pee.php" class="footer">
                                                <input type="submit" valor="continuar" id="botao">
                                            </form>
                        </div>
                        
</div>
<?php


?>
</body>
</html>