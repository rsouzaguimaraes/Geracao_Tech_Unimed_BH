<html>

	<head>
		<title>Meu primeiro site em PHP! JQuery Accordion!</title>
		<meta charset="utf8"/>
		<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
		
		<style type="text/css">
			body{
				font-family:Calibri, Verdana, Tahoma, Arial
			}
			.navBar{
				height:auto;
				overflow:hidden;
			}
 
			.grupo{
				height:auto;
				border:solid 1px;      
			}
 
			.titulo{
				padding:5px;
				height:20px;
			}
 
			.conteudo{
				display:none;
				padding:5px;
			}
 
			.cabecalho{
				border:solid 1px;
				border-radius:5px 5px 0 0;
				padding: 5px;
				height:20px;
				background: rgb(112, 156, 190)
			}
 
			.rodape{
				border:solid 1px;
				border-radius: 0 0 5px 5px;
				padding: 5px;
				height:20px;
				background: rgb(112, 156, 190);
			}  
</style>
	</head>
	
	<body>
		<div class="navBar">
			<div class="cabecalho">
				Barra de Navegação
			</div>
        <div class="grupo">
            <div class="titulo">Container 1</div>
            <div class="conteudo">Conteudo 1</div>
        </div>
        <div class="grupo">
            <div class="titulo">Container 2</div>
            <div class="conteudo">Conteudo 2</div>
        </div>
        <div class="grupo">
            <div class="titulo">Container 3</div>
            <div class="conteudo">Conteudo 3</div>
        </div>
        <div class="rodape">
            Rodapé
        </div>
    </div> 
		
	</body>
	
	<script type="text/javascript">
		var corAtiva = "rgb(112, 156, 190)";
		var corInativa = "rgb(255, 255, 255)";
		$(function(){
			$(".titulo").hover(
				function(){$(this).css("background", corAtiva);},
				function(){$(this).css("background", corInativa)}
			);
 
			$(".titulo").click(function(){
				$(".conteudo").slideUp();
				var cont = $(this).next();
				$(cont).slideDown("fast");     
			});
		});
		$(document).ready(function(){
			alert("Página carregada com sucesso");
		});
	</script>
	
</html>