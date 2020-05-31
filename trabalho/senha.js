function checa_seguranca(pass, campo)
{
var senha = document.getElementById(pass).value; 
var entrada = 0; 		
var resultadoado; 				
if(senha.length < 7){ 				
entrada = entrada - 1; 		
} 				
if(!senha.match(/[a-z_]/i) || !senha.match(/[0-9]/))
{ 				
entrada = entrada - 1; 		
} 				
if(!senha.match(/\W/))
{ 				
entrada = entrada - 1; 		
} 				
if(entrada == 0)
{ 				
resultado = 'A Seguran\u00e7a de sua senha \u00e9:<font color=\'#99C55D\'>EXCELENTE</font>'; 		
} 
else if(entrada == -1)
{ 				
resultado = 'A Seguran\u00e7a de sua senha \u00e9:<font color=\'#7F7FFF\'>BOM</font>'; 		
} 
else if(entrada == -2)
{ 				
resultado = 'A Seguran\u00e7a de sua senha \u00e9:<font color=\'#FF5F55\'>BAIXA</font>'; 		
} 
else if(entrada == -3)
{ 				
resultado = 'A Seguran\u00e7a de sua senha \u00e9:<font color=\'#A04040\'>MUITO BAIXA</font>'; 		
} 				
document.getElementById(campo).innerHTML = resultado; 				
return; 
} 