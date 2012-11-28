<div class="toolbar">
                	<div class="titlebar">
                	  <h1>Users</h1></div>
                    <div class="actionbutton"><a href="<?php echo base_url("master/users/section/newuser"); ?>">Add New</a></div>
                    <div class="extrabar"></div>
                </div>                
<div class="runninglist">
                	
                    <table width="1000">
                    	<thead>
                        	<tr>
                            	<th width="50"><input class="cboxToggleSelectAll" type="checkbox" /></th>
                                <th width="350">Email Address</th>
                                <th width="350">Fullname</th>
                                <th width="350">Address #1</th>
                                <th width="350">Address #2</th>
                                <th width="350">User Type</th>
                                <th width="350">Status</th>     
                                <th width="350">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
					<?php if(isset($users)): ?>
                        	<?php foreach($users as $user): ?>
                        	<tr>
                            	<td><input class="cboxSelector" type="checkbox" /></td><td><?php echo $user->email; ?></td>
                                <td><?php echo $user->fullname; ?></td>
                                <td><?php echo $user->addr1; ?></td>
                                <td><?php echo $user->addr2; ?></td>
                                <td><?php echo $user->utype; ?></td>
                                <td><?php echo $user->status; ?></td>
                            	<td><a href="<?php echo base_url("master/users/section/edituser/$user->u_id"); ?>">Edit</a> | <a href="<?php echo base_url("master/users/section/deleteuser/$user->u_id"); ?>">Delete</a></td>
                            </tr>                            
							<?php endforeach; ?>
					<?php endif; ?>

                        </tbody>
                    </table>
<div class="clearthis"></div>
                    <div><?php echo $pagination; ?></div>
                    <!--<div class="bulkaction">
                    	<select name="bulkaction">
                        	<option value="">Bulk action</option>
                    		<option value="deleteselected">Delete selected</option>
                            <option value="deleteall">Delete all</option>
                    	</select>
					</div>
                    <div class="applybutton">
                    	<a href="#">Apply</a>
                    </div>-->
                </div>