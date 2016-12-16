//Scripts Inicio v1.0

/*Contadores de Inicio*/
yu=function(id){return document.getElementById(id);}
if(localStorage){
if(localStorage['visitas']==undefined){
localStorage['visitas']=0;/* Codigo por http://adan-2994.es.tl/Contador_de_visitas_javascript.htm */
}var n=parseInt(localStorage['visitas']);localStorage['visitas']=1+n;
var num=localStorage['visitas'];

var mensaje="Hasta ahora has visitado mi pagina " + num + " Veces !";

yu('cuentavisitas').innerHTML=mensaje;}