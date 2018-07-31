

<div class="container">
  <h2>Weight Data</h2>        
  <?php echo form_open('daily_weight'); ?>
    <div class="form-group">
      <label for="create_date">Please Select A Date To display:</label>
      <input type="date" name="create_date" class="form-control" id="create_date" placeholder="Please Select A Date To display" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  <?php echo form_close(); ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <td>Date</td>
        <td><?php echo $dat->create_date; ?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Max</td>
        <td><?php echo $dat->max_weight; ?></td>
      </tr>
      <tr>
        <td>Min</td>
        <td><?php echo $dat->min_weight; ?></td>
      </tr>
      <tr>
        <td>Variance</td>
        <td><?php echo (int)$dat->max_weight - (int)$dat->min_weight; ?></td>
      </tr>
    </tbody>
  </table>
</div>

