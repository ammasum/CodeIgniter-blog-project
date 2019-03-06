<option>None</option>
<?php foreach ($data as $row){ ?>
    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
<?php } ?>