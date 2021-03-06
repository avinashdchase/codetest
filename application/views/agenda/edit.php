<div class="row">
    <div class="col-lg-12">           
        <h2>Agenda CRUD           
            <div class="pull-right">
				<a class="btn btn-primary" href="<?php echo base_url('agenda');?>"> List Agenda</a>
               <a class="btn btn-primary" href="<?php echo base_url('agenda/create');?>"> Create New Agenda</a>
			   <a class="btn btn-primary" href="<?php echo base_url('agenda/import');?>">Import Agenda</a>
			   <a class="btn btn-primary" href="<?php echo base_url('agenda/export');?>">Export Agenda</a>
            </div>
        </h2>
     </div>
</div>
<form method="post" name="agendaEdit" action="<?php echo base_url('agenda/update/'.$agendaarr->id);?>">
    <div class="row">
		<h1 style="text-align:center;">Edit Agenda</h1>
	   <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control" value="<?php echo $agendaarr->title; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"><?php echo $agendaarr->description; ?></textarea>
                </div>
            </div>
        </div>
		<div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Schedule Date</label>
                <div class="col-md-9">
                   <input type='text' name="schedule_date" value="<?php echo $agendaarr->schedule_date; ?>" class="form-control" id='dtpickerdemo2' />
                </div>
            </div>
        </div>
		<div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Status</label>
                <div class="col-md-9">
                    <select name="status" >
					<option value="Upcoming">Upcoming</option>
					<option value="running">Running</option>
					<option value="completed">Completed</option>
					<option value="cancelled">Cancelled</option>
					</select>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>