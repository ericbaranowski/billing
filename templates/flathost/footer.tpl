{if $pagetitle eq $LANG.carttitle}</div>{/if}

    </div>
</div>

<div class="footerdivider">
    <div class="fill"></div>
</div>

<!--===== Flathost  Footer =====-->

<div class="footer">
  <div class="container">
    <div class="row footerlinks">
      <div class="col-sm-4 col-md-2">
        <p>CONTACT US</p>
        <ul>
          <li> +1 (855) 5-KULADO </li>
          <li><a href="mailto:hosting@kulado.com" target="_blank">hosting@kulado.com</a></li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>Hosting Plans</p>
        <ul>
          <li><a href="#pricing">Personal Hosting</a></li>
          <li><a href="#pricing">Business Hosting</a></li>
          <li><a href="#pricing">Unlimited Hosting</a></li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>FOLLOW US</p>
        <ul>
          <li><a href="https://twitter.com/kuladoinc" target="_blank">Follow us on Twitter</a></li>
          <li><a href="https://www.facebook.com/kuladoinc" target="_blank">Like us on Facebook</a></li>
          <li><a href="https://www.linkedin.com/company/kulado-com" target="_blank">Join us on Linkedin</a> </li>
        </ul>
      </div>
<div class="col-sm-4 col-md-2">
        <p>LEGAL TERMS</p>
        <ul>
          <li><a href="http://domains.kulado.com/support/legal.php" target="_blank">terms of service</a></li>
          <li><a href="http://domains.kulado.com/support/privacy.php" target="_blank">privacy policy</a></li>
        </ul>
      </div>
    
<div class="col-sm-4 col-md-2">
        <p>SAFE & SECURE</p>
        <ul>
			<li><a href="https://sslanalyzer.comodoca.com/?url=hosting.kulado.com" style="font-family: arial; font-size: 12px; color: #212121; text-decoration: none;"><img src="https://www.positivessl.com/images-new/PositiveSSL_tl_trans.png" alt="Positive SSL on a transparent background" title="Positive SSL on a transparent background" border="0" /></a></li>
		</ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>Language</p>
        <ul>
          <li> {if $langchange}<div id="languagechooser">{$setlanguage}</div>{/if} </li>
        </ul>
      </div>
    </div>
      <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2q7cRGVbFI3x4q2WypNFqaz7luxGVxrM';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
    <div class="row copyright">
      <div class="pull-right"><img src="templates/{$template}/img/logo-footer.png" alt="logo"></div>
      <p>{$LANG.copyright} &copy; {$date_year} {$companyname}. {$LANG.allrightsreserved}.</p>
    </div>
  </div>
</div>

{$footeroutput}

</body>
</html>