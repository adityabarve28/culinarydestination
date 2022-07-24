var head = document.getElementsByTagName('head')[0];
var js = document.createElement("script");

js.type = "text/javascript";

if (screen.width >= 660)
{
    alert("MOBLIE VIEW");
}
else
{
    js.src = "skrollr.js";
}

head.appendChild(js);