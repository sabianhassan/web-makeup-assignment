<!-- add category modal -->
<div class="modal fade" id="modal-cat">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts/category.php" method="POST" id="form-cat" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add category</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing cat Index  -->
						<input type="hidden" name="id" id="cat-id">
						<div class="mb-3">
							<label class="form-label">name of category</label>
							<input  type="text" class="form-control" name="name" id="category"/>
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save_cat" class="btn btn-primary cat-action-btn" id="cat-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!--=================== edit category modal ==============-->
	<div class="modal fade" id="modal-edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts/category.php" method="POST" id="form-cat" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Edite category</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing category Index  -->
						<input type="hidden" name="id" id="edit-cat-id">
						<div class="mb-3">
							<label class="form-label">name of category</label>
							<input  type="text" class="form-control" name="name" id="edit-category-name"/>
						</div>
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white"  data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="edit_cat" class="btn btn-warning cat-action-btn" id="cat-edit-btn">Edit </button>
					</div>
				</form>
			</div>
		</div>
	</div>
	