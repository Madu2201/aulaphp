<!DOCTYPE html>
<html>
<head>
   <title>  Formulario - Elementos  </title>
</head>
	<body>
     
   <h1>Formulario de cadastro </h1>
   <br>       
   <form method="POST" action="valida_texto_comprimento.php">
   <label>Nome</label> 
      <INPUT type=TEXT  name='NOME'  placeholder="Entre com o seu nome commpleto" />
      <BR>
      <INPUT type=RESET  value="Limpar">
      <INPUT type=SUBMIT value="Enviar">
   </form>
   <BR>

      
   <form method="POST" action="valida_data.php">  
   <label>Data de Nascimento</label>
      <INPUT type=TEXT  name='DATE' placeholder="XX/XX/XXXX" id="data_nasc" />    
      <INPUT type=RESET  value="Limpar">
      <INPUT type=SUBMIT value="Enviar">
   </form>
   <BR>

         
   <form method="POST" action="valida_idade.php">
   <label>Idade</label> 
      <INPUT type=TEXT  name='IDADE'  placeholder="Entre a sua idade" />
      <BR>
      <INPUT type=RESET  value="Limpar">
      <INPUT type=SUBMIT value="Enviar">
   </form>
   <BR>
   
   <form method="POST" action="valida_radio.php">  
   <label>Sexo</label>
   <BR>
          <INPUT type=RADIO name=CAMPO_SEXO value="M">Masculino
    <BR>  <INPUT type=RADIO name=CAMPO_SEXO value="F">Feminino
    <BR>  <INPUT type=RADIO name=CAMPO_SEXO value="O">Outro
    <BR>
    <INPUT type=RESET  value="Limpar">
    <INPUT type=SUBMIT value="Enviar">
    </form>
   <BR>

        
   <form method="POST" action="valida_texto_comprimento.php">
   <label>Nome Materno</label>  
      <INPUT type=TEXT  name='NOME'  placeholder="Entre com o seu nome commpleto" />
      <BR>
      <INPUT type=RESET  value="Limpar">
      <INPUT type=SUBMIT value="Enviar">
   </form>
   <BR>
    
   <form method="POST" action="valida_cpf.php">    
   <label>CPF</label>  
   <INPUT type=TEXT  name='CPF'  placeholder="XXX.XXX.XXX-XX" id="cpf"  /> 
   <BR>
    <INPUT type=RESET  value="Limpar">
    <INPUT type=SUBMIT value="Enviar">
    </form>
   <BR>

    
   <form method="POST" action="valida_email.php">  
   <label>E-mail</label>  
   <INPUT type=TEXT  name='CAMPO_EMAIL'    placeholder="XXX.XXX.XXX-XX" />
   <BR>
    <INPUT type=RESET  value="Limpar">
    <INPUT type=SUBMIT value="Enviar">
    </form>
   <BR>

     
   <form method="POST" action="valida_celular.php">  
   <label>Telefone Celular</label> 
   <INPUT type=TEXT  name='CAMPO_CELULAR'  placeholder="(+xx)(XX)XXXXX.XXXX"  id="tel_celular" />   
   <BR>
    <INPUT type=RESET  value="Limpar">
    <INPUT type=SUBMIT value="Enviar">
    </form>
   <BR>
      
   <form method="POST" action="valida_fixo.php">  
   <label>Telefone Fixo</label>
   <INPUT type=TEXT  name='CAMPO_FIXO'  placeholder="(+xx)(XX)XXXX.XXXX" id="tel_fixo"/>   
   <BR>
    <INPUT type=RESET  value="Limpar">
    <INPUT type=SUBMIT value="Enviar">
    </form>
   <BR>

<!--- Endereço completo -->
    <form method="POST" action="valida_endereco.php">

    <BR>
    <label>CEP</label>
    <INPUT type=TEXT  name='CAMPO_CEP' id="cep">   
    <BR>  
    <label>Endereço</label>
    <INPUT type=TEXT  name='CAMPO_ENDERECO'>   
    <BR>
    <label>Numero</label>
    <INPUT type=TEXT  name='CAMPO_NO'>   
    <BR>
    <label>Complemento</label>
    <INPUT type=TEXT  name='CAMPO_COMPLEMENTO'>   
    <BR>
    <label>Bairro</label>  
    <INPUT type=TEXT  name='CAMPO_BAIRRO'>   
    <BR>  
    <label>Cidade</label>  
    <INPUT type=TEXT  name='CAMPO_CIDADE'>   
    <BR>  
    <label>UF</label> 
    <INPUT type=TEXT  name='CAMPO_UF'>   
    <BR>
    <INPUT type=RESET  value="Limpar">
    <INPUT type=SUBMIT value="Enviar">
    </form>
   <!-- Fim do endereço completo -->

   <BR>
   <form method="POST" action="valida_login.php">
   <label>Login</label>    
   <INPUT type=TEXT  name='CAMPO_LOGIN'>   
   <BR>       
   <label>Senha</label>
   <INPUT type=PASSWORD  name='CAMPO_SENHA'>
   <BR> 
   <label>Confirmar Senha</label>
   <INPUT type=PASSWORD  name='CAMPO_CONFIRMA'>      
   <BR>
   <INPUT type=RESET  value="Limpar">
   <INPUT type=SUBMIT value="Enviar">
   </form>
   


   <script src="https://unpkg.com/imask"></script>

<!---- Meu arquivo jQuery para mascara --->
<script src="js/mascara.js"></script>

<!---- Meu arquivo javascript --->
<script src="js/cadastro.js"></script>

   </body>
	</body>
</html>