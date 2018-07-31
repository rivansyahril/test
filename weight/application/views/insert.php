<div class="container">
  <h2>Insert Weight</h2>
  <?php echo form_open('insert/act'); ?>
    <div class="form-group">
      <label for="min_weight">Min Weight:</label>
      <input type="text" name="min_weight" class="form-control" id="min_weight" placeholder="Min Weight" required>
    </div>
    <div class="form-group">
      <label for="max_weight">Max Weight:</label>
      <input type="text" name="max_weight" class="form-control" id="max_weight" placeholder="Max Weight" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  <?php echo form_close(); ?>
</div>