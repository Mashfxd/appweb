function asyncRequest()
{
try // Navegador No IE?
{
var request = new XMLHttpRequest()
}
catch(e1)
{
try //Navegador IE6+?
{
request = new ActiveXObject("Msxml2.XMLHTTP")
}
catch(e2)
{
try //Navegador IE 5?
{
request = new ActiveXObjetct("Microsoft.XMLHTTP")
}
catch(e3) //no hay soporte asincrono
{
request = false
}
}
}
return request
}

console.log(asyncRequest())