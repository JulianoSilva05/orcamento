<?php
	include ("conexao.inc");
?>
<html>
	<head>
		<meta charset="UTF-8"/> 
		<title>Orçamento</title>
		<style type="text/css">
			@import url(style.css); 
	    </style>
	
	</head>
	<body>
		<div class="cabecalho">
			<h3>Planilha de orçamento Midia indoor por licença</h3>
		</div>
			<form name="caduser" method="post" action="post.php">
		<select name="produtos">
			<option>Produto:</option>
				<?php
					$sql="SELECT * FROM produtos";
					$rs=mysqli_query($conexao,$sql);
					while($produt = mysqli_fetch_assoc($rs)){ ?>
                        <option value="<?php echo $produt['valor']; ?>"><?php echo $produt['produto']; ?>
                    </option><?php
                     }
                    ?>
		</select><br><br>
			<label> Quantidade: </label><br>
			<input type="int" name="quant"/><br><br>
                <input type="submit" name="btcad" value="Orçamento"/><br>
			</form>
		</div>
		<button onclick="window.location.href='registrar.html'">Cadastrar protudos</button>
		</div>
	</body>	
</html>