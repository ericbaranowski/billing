    {if $pagetitle eq $LANG.carttitle}</div>{/if}
    
    <div class="clear"></div>
    
  </div>
  
</div>


<div id="whmcsfooter">

    <div class="whmcscontainer">
    
        {if $langchange}<div id="languagechooser">{$setlanguage}</div>{/if}
        <div id="copyright">{$LANG.copyright} &copy; {$date_year} {$companyname}. {$LANG.allrightsreserved}.</div>
        
        <div class="clear"></div>
        
    </div>
    
</div>

{literal}
	<script>
      var selectBox = $("select").selectBoxIt().data("selectBoxIt");            
	</script>
{/literal}	


{$footeroutput}

</body>

</html>