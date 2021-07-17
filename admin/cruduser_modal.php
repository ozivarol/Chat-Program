<!-- Add User -->
    <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Yeni Kullanici Ekle</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Ad:</span>
						<input type="text" style="width:350px;" class="form-control" id="uname" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Soyad:</span>
						<input type="text" style="width:350px;" class="form-control" id="uusername" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Sifre:</span>
						<input type="text" style="width:350px;" class="form-control" id="upassword" required>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Yetki:</span>
						<select style="width:350px;" class="form-control" id="uaccess">
							<option value="2">Kullanici</option>
							<option value="1">Admin</option>
						</select>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Iptal</button>
                    <button type="button" class="btn btn-primary" id="adduser"><span class="glyphicon glyphicon-check"></span> Ekle</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Delete User -->
    <div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Kullanici Siliniyor ...</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<h3><center>Emin misin?</center></h3>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Iptal</button>
                    <button type="button" class="btn btn-danger" id="confirm_delete"><span class="glyphicon glyphicon-check"></span> Sil</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

<!-- Edit User -->
    <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Kullaniciyi Duzenle</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Ad:</span>
						<input type="text" style="width:350px;" class="form-control" id="user_name">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Kullanici adi:</span>
						<input type="text" style="width:350px;" class="form-control" id="user_user">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Sifre:</span>
						<input type="text" style="width:350px;" class="form-control" id="user_pass">
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Iptal</button>
                    <button type="button" class="btn btn-success" id="confirm_update"><span class="glyphicon glyphicon-check"></span> Guncelle</button>
				
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->

