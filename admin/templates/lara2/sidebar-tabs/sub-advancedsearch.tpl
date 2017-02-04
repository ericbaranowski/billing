            <ul class="control-sidebar-menu">
              <li>
                <a href="#">
                  <i class="menu-icon fa fa-search bg-red "></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">{$_ADMINLANG.global.advancedsearch}</h4>
                    <p><div class="progress progress-xxs"><div class="progress-bar progress-bar-danger" style="width: 100%"></div></div></p>
                  </div>
                </a>
              </li>
            </ul>

            <form method="get" action="search.php">
              <div class="form-group">
			  <p>
				<select name="type" id="searchtype" onchange="populate(this)" class="form-control input-sm">
				  <option value="clients">Clients </option>
				  <option value="orders">Orders </option>
				  <option value="services">Services </option>
				  <option value="domains">Domains </option>
				  <option value="invoices">Invoices </option>
				  <option value="tickets">Tickets </option>
				</select>
			  </p>	
			  <p>
				<select name="field" id="searchfield" class="form-control input-sm">
				  <option>Client ID</option>
				  <option selected="selected">Client Name</option>
				  <option>Company Name</option>
				  <option>Email Address</option>
				  <option>Address 1</option>
				  <option>Address 2</option>
				  <option>City</option>
				  <option>State</option>
				  <option>Postcode</option>
				  <option>Country</option>
				  <option>Phone Number</option>
				  <option>CC Last Four</option>
				</select>
			   </p>
			   <p>
				<div class="input-group input-group-sm">
					<input type="text" name="q" class="form-control" />
					<div class="input-group-btn">
						<input type="submit" value="{$_ADMINLANG.global.search}" class="btn btn-warning" />
					</div>
				</div>
                </p>				
              </div><!-- /.form-group -->
            </form>	
