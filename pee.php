<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>um pquequeno espoço</title>
<style>
body{
    margin:0;
}
.principal{
    display:grid;
    grid-template-columns:  1fr 3fr 1fr;
    grid-template-rows: 75px 40px auto;
    grid-template-areas:
    "cabecario cabecario cabecario" 
    "nav nav nav" 
    "atualizacao conteudo calendario"
    
}
.cabecario{
    position:fixed; 
    grid-area: cabecario; 
    background-color: rgb(12, 12, 114);
    width:100%;
    height: 75px;
    }
.nav{
    grid-area: nav;
    background-color: rgb(46, 46, 168); 
    position:fixed;
    top:75px;
    height:40px;
    width:100%;
}
.atualizacao{
    grid-area: atualizacao;
    padding:4px;
}
.conteudo{
    grid-area: conteudo;
    border:1px rgba(0, 0, 0, 0.1) solid;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    padding:10px;
    margin:0;   
}
.calendario{
    grid-area: calendario;
    padding:10px;
}
.conteudo{
    display:grid;
    grid-template-columns:1fr;
    grid-template-rows:40px auto;
    grid-template-areas:"perfil" "dados";
    margin:5px;
}
.conteudo2{
    grid-area:perfil;
    border-bottom:1px rgba(0, 0, 0, 0.1) solid;
    padding:4px;
    text-align:center;
    display:grid;
    grid-template-columns:1fr 1fr;
    grid-template-rows:1fr 1fr;
    grid-template-areas:"ae af" "ae af";
}
.perfil{
    grid-area:ae;
    text-align:center;
}
.cronograma{
    grid-area:af;
    text-align:center;
}
.conteudo3{
    grid-area:dados;
    padding:4px;
    border-bottom:1px rgba(0, 0, 0, 0.1) solid;
    text-align:center;
}.fot{
    display:flex; margin:40px; padding-left:10px;
}
h3{
    position:absolute;
    top:370px;
}
#v{
    width:100pt;
    border-radius:50%;
}

.nav{display:flex;padding-left:300px;}
.ma{margin:20px;padding-left:10px;}
.mb{margin:20px; padding-left:10px;}
.mc{margin:20px; padding-left:10px;}
.md{margin:20px; padding-left:10px;}
.me{margin:20px; padding-left:10px;}
.mf{margin:20px; padding-left:10px;}

div.ma:hover{background-color:red; color:white; transition: 1s;}
div.mb:hover{background-color:red; color:white; transition: 1s;}
div.mc:hover{background-color:red; color:white; transition: 1s;}
div.md:hover{background-color:red; color:white; transition: 1s;}
div.me:hover{background-color:red; color:white; transition: 1s;}
div.mf:hover{background-color:red; color:white; transition: 1s;}

</style>

<script>

</script>
</head>
<body class:"aa">
<div class="principal">
                        <div class="cabecario"><div>imagem</div><div>SAIR</div></div>
                        <div class="nav">
                                        <div class="ma">PÁGINA INICIAL</div>
                                        <div class="mb">NOTIFICAÇÃO</div>
                                        <div class="mc">DOCUMENTOS</div>
                                        <div class="md">FORUM</div>
                                        <div class="me">ATIVIDADES</div>
                                        <div class="mf">DEFINIÇÕES</div>
                        </div>

                        <div class="atualizacao">atualização</div>
                        <!--este é a div dos dados em que vai estar todos os dados do perfil do estudante!-->
                        <div class="conteudo">
                            <div class="conteudo2">
                                        <div class="perfil"><span>Perfil</span></div>
                                        <div class="cronograma"><span>cronograma</span></div>
                            </div>
                            <!--dar um display flex na foto e nome!-->
                            <div class="conteudo3">
                                        <div class="fot"><img id="v" src="m.JPG"/>
                                        <h3>Mariano Vungel</h3>
                                        </div>
                                        <div class="main">
                                             <h2>Sidebar</h2>
                                            <p>This sidebar is of full height (100%) and always shown.</p>
                                            <p>Scroll down the page to see the result.</p>
                                            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                                            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                                            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                                            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                                        </div>
                            </div>
                            </div>
                        <div class="calendario">calendario</div>
</div>
<?php


?>
</body>
</html>