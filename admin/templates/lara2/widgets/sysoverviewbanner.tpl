<script type="text/javascript">
	$('#sysoverviewbanner').remove();
</script>

<div id="sysoverviewbanner" style="display:none;"></div>


<!-- Small boxes (Stat box) -->
          <div id="larasysbanner" class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box {$laraSysOverview.supporttickets.bgcolor|default:'bg-green'}">
                <div class="inner">
				<h3 id="tickets-sbox-value">{$laraSysOverview.supporttickets.value|default:'0'}</h3>
                  <p>{$_ADMINLANG.stats.ticketsawaitingreply}</p>
                </div>
                <div class="icon">
                  <i class="fa fa-ticket"></i>
                </div>
                <a href="supporttickets.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box {$laraSysOverview.cancelrequests.bgcolor|default:'bg-green'}">
                <div class="inner">
				<h3 id="cancel-sbox-value">{$laraSysOverview.cancelrequests.value|default:'0'}</h3>
                  <p>{$_ADMINLANG.stats.pendingcancellations}</p>
                </div>
                <div class="icon">
                  <i class="fa fa-ban"></i>
                </div>
                <a href="cancelrequests.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box {$laraSysOverview.todolist.bgcolor|default:'bg-green'}">
                <div class="inner">
				<h3 id="todo-sbox-value">{$laraSysOverview.todolist.value|default:'0'}</h3>
                  <p>{$_ADMINLANG.stats.todoitemsdue}</p>				  
                </div>
                <div class="icon">
                  <i class="fa fa-list-ol"></i>
                </div>
                <a href="todolist.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box {$laraSysOverview.networkissues.bgcolor|default:'bg-green'}">
                <div class="inner">
				<h3 id="network-sbox-value">{$laraSysOverview.networkissues.value|default:'0'}</h3>
                  <p>{$_ADMINLANG.stats.opennetworkissues}</p>
                </div>
                <div class="icon">
                  <i class="fa  fa-sitemap"></i>
                </div>
                <a href="networkissues.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->