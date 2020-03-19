<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	  <meta charset="utf-8"/>

  	<title>Meu Perfil</title>

  	
  
<style> 



 
 #texto {
   
    font-family: Garamond;
    font-size: 22px;
    font-weight: bold;
   /*text-shadow: 3px 3px 3px black ;*/
    text-align: left;
    color: black;
    margin: 0 auto;
   width: 300px;
   padding: 15px;
      

}
.bordas{
    height:330px;
    padding: auto;
    border-style: solid;
    border-color: black;
}




.img {
  display: table;
  width: 100%;
  height: 100vh;
  padding: 100px 0;
  background: url('https://image.freepik.com/fotos-gratis/imagem-desfocada-muitos-livros-antigos-na-estante-de-livros-na-biblioteca_35048-1884.jpg') no-repeat bottom center fixed;
 background-position: 100% 70%;
  background-size: cover;
  position: fixed;
}

body {
    margin: 0;


}

/*mg {
  filter: blur(50px) contrast(5);
}

*/
img{
   max-width:180px;
   max-height:100px;
   width: auto;
   height: auto;
   background-color: ;
   float: right;


}


/*.background-image {
   display: table;
  width: 100%;
  height: 100vh;
  padding: 100px 0;
  color: white;
  background: url('https://conteudo.solutudo.com.br/wp-content/uploads/2020/01/shutterstock_369965450.jpg') no-repeat bottom center fixed;
  background-position: 30% 45%;
  background-size: cover;

filter: blur(9px);

*/

 </style>



  	</head>


  <body>
  	
  
    
	<div class='img'>

<?php 


# $mostra = array ('<h3> Rua: </h3>', 'Bairro', 'Cidade');



$dados = array (

 #'img' => array  ('https://images.vexels.com/media/users/3/137047/isolated/preview/5831a17a290077c646a48c4db78a81bb---cone-de-perfil-de-usu--rio-azul-by-vexels.png',
 


  'img' => array ('https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/4_avatar-512.png','https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/9_avatar-512.png', 'https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/7_avatar-512.png'),

 'Nome' => array ('Samara ', 'Rênata' , 'João Vitor'),
 'Apelido' => array ('Sam02_', 'Rênunes33', 'jãosan_')
# 'Endereço' => array ('<h3> Rua: </h3>', 'Bairro:', 'Cidade:')
);

"<div>";

$endereco = array (

	'Rua' => array ('A', 'B', 'C') ,
	'Bairro' => array ('Luz', 'Alvorada', 'Itapuam'),
	'Cidade' => array ('Guanambi', 'Floripa', 'Salvador')

);

$id = array (

'Curso' => array ('Informática', 'Agrópecuaria', 'Agroindústria'),
'Disciplina' => array ('Web I', 'Matématica', 'Banco de dados'),
'e-mail' => array ('samarafeitosabarros@gmail.com', 'renatanunesferreira@gmail.com' , 'joaovitorsantana@gmail.com'),
'ano'=> array (2020,2020,2020)
 );


#echo "<div class= 'icon' >";

#echo "<p>";



#"</div>";




 echo "<div class='bordas' id='texto'>";

  echo('<img src=' . $dados['img'][0] .'>');
  echo "<br>"; 

  echo ' Nome: ' . ($dados['Nome'][0]) . '<br>';
  echo ' Apelido: ' . ($dados['Apelido'][0]).'<br>';
  
   echo "<br>";

   


  echo 'Endereço: <br>' ;

  echo ' Rua: '. ($endereco ['Rua'][0] . '<br>');
  echo ' Bairro: '. ($endereco ['Bairro'][0] . '<br>');
  echo ' Cidade: '. ($endereco ['Cidade'][0] . '<br>');

  echo 'E-mail: '.  ($id ['e-mail'][0] . '<br>');
  echo 'Curso: '. ($id ['Curso'][0] . '<br>');
  echo ' Disciplina: '. ($id ['Disciplina'][0] . '<br>');
   echo ' Ano:'. ($id ['ano'][0] . '<br>');


 
#"</div>";

"</p>";
  #echo($dados['']);
  #echo(gettype($mostra)) ;

       

"</div>";



?>



 </div>

</body>
</html>

