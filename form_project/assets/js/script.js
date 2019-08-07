script.js
$(function(){
   $('#cpf').mask("000.000.000-00", {placeholder: "___.___.___-__"});
});
$(function(){
   $('#rg').mask("0.000.000-0", {placeholder: "_.___.___-_"});
});
$(function(){
   $('#telefone').mask("(00) 0000-0000", {placeholder: "(__) ____-____"});
});
$(function(){
   $('#celular').mask("(00) 0 0000-0000", {placeholder: "(__) _ ____-____"});
});
$(function(){
   $('#nascimento').mask("00/00/0000", {placeholder: "__/__/____"});
});