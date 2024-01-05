<!-- post MODAL -->
<div class="modal fade" id="modal-articl">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts/article.php" method="POST" id="form-articl" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Article
</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing articl Index  -->
						<input type="hidden" name="id" id="articl-id">
						<div class="mb-3">
							<label class="form-label">Title</label>
							<input  type="text" class="form-control" name="add_title_post" id="title"/>
						</div>
						<div class="mb-3">
							<label class="form-label">Category</label> 
							<select class="form-select" name="category" id="category">
							    <option value="">Please select</option>
                                <?php 
                                    // $table = 'categorie';
                                    $data = $catData;
                                    foreach ($data as $category) {
                                        echo "<option value=".$category['id']."> $category[name] </option>";
                                    }

									// echo '<pre>';
									// var_dump($catData);
									// echo '</pre>';
                                ?>
								
                                    <!-- <option value="">Please select</option> 
                                    <option value="1">Ordinateurs </option>
                                    <option value="2">Accessoires </option> -->

							</select>
						</div>
						<div class="mb-2">
							<label class="form-label">image</label> 
							<input type="file" class="form-control" id="inputGroupFile04" name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
							<!-- <input type="file" [(ngModel)]="examen_bestand" name="examen_bestand" class="form-control" id="exampleInputFile" aria-describedby="fileHelp" (change)="fileChanged($event)"> -->

						</div>
						<div class="mb-0">
							<label class="form-label">Description</label>
    						<textarea name="description" id="editor"></textarea>
							<!-- <textarea class="form-control" rows="5" name="description" id="articl-description"></textarea> -->
						</div>
					
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save_articl"   class="btn btn-primary articl-action-btn" id="articl-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!-- edite post MODAL -->
<div class="modal fade" id="modal-edit-post">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts/article.php" method="POST" id="form-articl" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Edit Articl</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing articl Index  -->
						<input type="hidden" name="id" id="id-edit-articl">
						<div class="mb-3">
							<label class="form-label">Title</label>
							<input  type="text" class="form-control" name="title" id="title-edit-articl"/>
						</div>
						<div class="mb-3">
							<label class="form-label">Category</label> 
							<select class="form-select" name="category" id="category-edit-articl">
							    <option value="">Please select</option>
                                <?php 
                                    $data = $catData;
                                    foreach ($data as $category) {
                                        echo "<option value=".$category['id']."> $category[name] </option>";
                                    }
                                ?>
								
							</select>
						</div>
						<div class="mb-2">
							<label class="form-label">image</label> 
							<input type="file" class="form-control" id="image-edit-articl"  name="image" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
						</div>
						<div class="mb-0">
							<label class="form-label">Description</label>
    						<textarea name="description" id="description-edit-articl"></textarea>
						</div>
					
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="edit_articl" class="btn btn-warning articl-action-btn" id="articl-save-btn">Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
