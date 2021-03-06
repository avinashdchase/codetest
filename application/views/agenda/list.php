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
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
		  <th>Schedule Date</th>
		  <th>Status</th>
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
          <td><?php echo $d->title; ?></td>
          <td><?php echo $d->description; ?></td>  
		<td><?php echo $d->schedule_date; ?></td>    
			<td><?php echo $d->status; ?></td>    		  
      <td>
        <form method="DELETE" action="<?php echo base_url('agenda/delete/'.$d->id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('agenda/edit/'.$d->id) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>