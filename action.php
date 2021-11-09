<!-- Variável global array $_POST, onde os índices do array são referenciados pelo nome atribuido ao elemento HTML -->
<!-- Função htmlspecialchars(): converte caracteres para exibição em HTML -->
Olá <?php echo htmlspecialchars($_POST['nome']); ?>.
<!-- (int) faz  conversão para tipo int-->
Você tem <?php echo (int)$_POST['idade']; ?> anos de idade.