<?php
   include 'cabecalho.php';
   $id = $_GET['id'];
   echo"Código id = $id";
?>
<body>
    <div class="container ">
        <h2> Atualizar Produto</h2>
        <?php
         require 'conexao.php';
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $stmt = $pdo->query($sql);
        $produto = $stmt->fetch(PDO::FETCH_ASSOC) 
        
        //echo "ID: " . $produto['id'] . "<br>";
        //echo "Nome: " . $produto['nome'] . "<br>";
        //echo "Preço: R$" . $produto['preco'] . "<br>";
       // echo "Estoque: " . $produto['estoque'] . "<br><br>";
        

         ?>
        <form action="#" method="POST">
            <div class="mb-3">
             Nome:<input value="<?php echo $produto['nome'];?>"type="text" name="nome" class="form-control" >
            </div>
            <div class="mb-3"> 
            Preço:<input value=" <?php echo $produto['preco']; ?>" type="text" name="preco" >
            </div>
            <div class="mb-3 form-check"> 
            Quantidade: <input value=" <?phpecho $produto['quantidade']; ?>" type="text"  name="quantidade" >
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
       </form>
    </div>     


<?php
   include 'pontape.php'
?>
</html>