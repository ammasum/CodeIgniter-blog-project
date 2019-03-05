<?php foreach ($data as $row){ ?>
    <option>None</option>
    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
<?php } ?>