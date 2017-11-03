/*ES6 usage should be low/none in browser-based JS to maximize compatibility. If we absolutely need to, we could see if we could find a compatibility layers*/
//require("js-cookie");
function light()
{
  Cookies.set("theme", "light")
  document.getElementsByTagName('link')[0].setAttribute('href', 'http://matdark.dgramop.xyz/build/matlight.css')
}

function dark()
{
  Cookies.set("theme", "dark")
  document.getElementsByTagName('link')[0].setAttribute('href', 'http://matdark.dgramop.xyz/build/matdark.css')
}
