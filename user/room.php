		<div class="col-lg-8">
            <div class="panel panel-default" style="height:50px;">
				<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span  id="user_details"><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($cmem); ?></span></span> <?php echo $chatrow['chat_name']; ?></strong></span>
				<div class="showme hidden" style="position: absolute; left:-120px; top:20px;">
					<div class="well">
						<strong>Room Member/s:</strong>
						<div style="height: 10px;"></div>
					<?php
						$rm=mysqli_query($conn,"select * from chat_member left join `user` on user.userid=chat_member.userid where chatroomid='$id'");
						while($rmrow=mysqli_fetch_array($rm)){
							?>
							<span>
							<?php
								$creq=mysqli_query($conn,"select * from chatroom where chatroomid='$id'");
								$crerow=mysqli_fetch_array($creq);
								
								if ($crerow['userid']==$rmrow['userid']){
									?>
										<span class="glyphicon glyphicon-user"></span>
									<?php
								}
								
							?>
							<?php echo $rmrow['uname']; ?></span><br>
							<?php
						}
						
					?>
						
					</div>
				</div>
				<div class="pull-right" style="margin-right:10px; margin-top:7px;">
					<?php
						if ($chatrow['userid']==$_SESSION['id']){
							?>
							<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Lobi</a>
							<a href="#delete_room" data-toggle="modal" class="btn btn-danger">Odayi Sil</a>
							<a href="#add_member" data-toggle="modal" class="btn btn-primary">Kullanici Ekle</a>
							<?php
						}
						else{
							?>
							<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Lobi</a>
							<a href="#leave_room" data-toggle="modal" class="btn btn-warning">Odadan Ayril</a>
							<?php
						}
					?>
				</div>
			</div>
			<div>
				<div class="panel panel-default" style="height: 400px;">
					<div style="height:10px;"></div>
					<span style="margin-left:10px;">Cet Odasina Hosgeldin</span><br>
					<span style="font-size:10px; margin-left:10px;"><i>Not: Hesabın yasaklanmasını önlemek için küfür ve nefret söylemi kullanmaktan kaçının.</i></span>
					<div style="height:10px;"></div>
					<div id="chat_area" style="margin-left:10px; max-height:320px; overflow-y:scroll;">
					</div>
				</div>
				
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Mesajınızı yazınız..." id="chat_msg">
					<span class="input-group-btn">
					<button class="btn btn-success" type="submit" id="send_msg" value="<?php echo $id; ?>">
					<span class="glyphicon glyphicon-comment"></span> Gonder
					</button>
					</span>
				</div>
				
			</div>			
		</div>