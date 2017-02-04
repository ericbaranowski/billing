<html>
<head>
    <script type="text/javascript">

        // Wait for the page to load first
        window.onload = function() {

          //Get a reference to the link on the page
          // with an id of "mylink"
          var a = document.getElementById("ssl");

          //Set code to run when the link is clicked
          // by assigning a function to "onclick"
          a.onclick = function() {

<!--
dn="kulado.com";
at="0";
lang="en";
sealid=0;
gts_splash_url="https://sealsplash.geotrust.com";
gts_seal_url="https://seal.geotrust.com";

var gmt_offset=0;gts_u1=gts_splash_url+"/splash?&dn="+dn;gts_u2=gts_seal_url+"/getgeotrustsslseal?at="+at+"&sealid="+sealid+"&dn="+dn+"&lang=en&gmtoff=0";var ver=-1;var v_ua=navigator.userAgent.toLowerCase();var re=new RegExp("msie ([0-9]{1,}[\.0-9]{0,})");if(re.exec(v_ua)!=null){ver=parseFloat(RegExp.$1);}
var v_old_ie=(v_ua.indexOf("msie")!=-1);if(v_old_ie){v_old_ie=ver<5;}
function geotrust_ssl_splash(){tbar="location=yes,status=yes,resizable=yes,scrollbars=yes,width=516,height=500";sw=window.open(gts_u1,'GEOTRUST_SSL_Splash',tbar);if(sw){sw.focus();}}
function gts_mact(e){if(document.addEventListener){var s=(e.target.name=="gts_seal");if(s){geotrust_ssl_splash();return false;}}else if(document.captureEvents){var tgt=e.target.toString();var s=(tgt.indexOf("splash")!=-1);if(s){geotrust_ssl_splash();return false;}}
return true;}
function gts_mDown(event){if(document.addEventListener){return true;}
event=(event||window.event);if(event){if(event.button==1){if(v_old_ie){return true;}else{geotrust_ssl_splash();return false;}}else if(event.button==2){geotrust_ssl_splash();return false;}}else{return true;}}
document.write("<a HREF=\""+gts_u1+"\" tabindex=\"-1\" onmousedown=\"return gts_mDown(event);\" target=\"GEOTRUST_SSL_Splash\"><IMG NAME=\"gts_seal\" BORDER=\"true\" SRC=\""+gts_u2+"\" oncontextmenu=\"return false;\" alt=\"Click to Verify - This site has chosen a GeoTrust SSL Certificate to improve Web site security\"></A>");if((v_ua.indexOf("msie")!=-1)&&(ver>=7)){var plat=-1;var re=new RegExp("windows nt ([0-9]{1,}[\.0-9]{0,})");if(re.exec(v_ua)!=null){plat=parseFloat(RegExp.$1);}
if((plat>=5.1)&&(plat!=5.2)){document.write("<div style='display:none'>");document.write("<img src='https://extended-validation-ssl.geotrust.com/dot_clear.gif'/>");document.write("</div>");}}
if(document.addEventListener){document.addEventListener('mouseup',gts_mact,true);}else{if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=gts_mact;}}
function gts_resized(){if(pageWidth!=innerWidth||pageHeight!=innerHeight){self.history.go(0);}}
if(document.layers){pageWidth=innerWidth;pageHeight=innerHeight;window.onresize=gts_resized;}
-->

            //If you don't want the link to actually 
            // redirect the browser to another page,
            // "google.com" in our example here, then
            // return false at the end of this block.
            // Note that this also prevents event bubbling,
            // which is probably what we want here, but won't 
            // always be the case.
            return false;
          }
        }
    </script>
</head>
</html>