
        </div><!-- /.main-content -->
        {if $secondarySidebar->hasChildren()}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
            </div>
        {/if}
    </div>
    <div class="clearfix"></div>
</section>

<section id="footer">

    <p>Copyright &copy; {$date_year} {$companyname}. All Rights Reserved.</p> <div class="whmis"><a href="http://iserverhosting.com">iserverhosting.com</a></div>

</section>

<script src="{$BASE_PATH_JS}/bootstrap.min.js"></script>
<script src="{$BASE_PATH_JS}/jquery-ui.min.js"></script>
<script type="text/javascript">
    var csrfToken = '{$token}';
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/whmcs.js"></script>

{$footeroutput}

</body>
</html>
