
	<div class="modal fade" id="new_testimony" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content modal-form-sm">
				<div class="modal-header">
					<div class="pull-right">
						<button class="btn btn-danger btn-sm modal_close_btn" data-dismiss="modal" class="close" title="Close"> &times;</button>
					</div>
					<h4 class="modal-title">New Testimony</h4>
				</div><!--/.modal-header-->
				<div class="modal-body">
					<?php 
					echo form_open('testimonial/create_testimonial'); ?>					
						
						<div class="form-group">
							<label class="form-control-label">Name</label>
							<br/>
							<input type="text" name="name" class="form-control" required />
						</div>

						<div class="form-group">
							<label class="form-control-label">Video URL</label>
							<input type="url" name="url" class="form-control" required />
						</div>
						
						<div id="status_msg"></div>
						
						<div>
							<button class="btn btn-primary">Submit </button>
						</div>

					<?php echo form_close(); ?>

				</div>
			</div>
		</div>
	</div>