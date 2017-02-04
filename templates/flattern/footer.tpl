	</div><!--/.content-->


	<!--content.begin--><!--widget.begin-->
	<div class="widget-area widget-area-sidebar col-lg-3">

		<div class="clientarea-normal">
			<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12 clientarea-button clientarea-order">
					<a title="Order" href="cart.php?gid=3&systpl=flattern&carttpl=flatternslider">
						<span class="glyphicon glyphicon-plus-sign"> </span>
						<h4>{$LANG.navservicesorder}</h4>
					</a>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-12 clientarea-button clientarea-kb">
					<a title="KB" href="knowledgebase.php">
						<span class="glyphicon glyphicon-book"> </span>
						<h4>{$LANG.knowledgebasetitle}</h4>
					</a>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-12 clientarea-button clientarea-status">
					<a title="Server Status" href="serverstatus.php">
						<span class="glyphicon glyphicon-stats"> </span>
						<h4>{$LANG.networkstatustitle}</h4>
					</a>
				</div>
			</div>
		</div>
		{if $langchange}<div id="languagechooser">{$setlanguage}</div>{/if}
		<div class="info-aa">
		    <a href="http://likeenter.com">likeenter.com</a>
		</div>
	</div><!--/.sidebar-->

</div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="templates/{$template}/js/jquery.easypiechart.min.js"></script>
<script type='text/javascript' src='templates/{$template}/js/whmcs.js'></script>
{$footeroutput}
</body>
</html>	