<div class="container">
  <h2>Update Weight</h2>
  <form action="<?php echo site_url('edit/act'); ?>" method="POST">
    <div class="form-group">
      <label for="min_weight">Min Weight:</label>
      <input type="number" class="form-control" id="min_weight" placeholder="Min Weight" name="min_weight" value="<?php echo $min_weight; ?>" required>
    </div>
    <div class="form-group">
      <label for="max_weight">Max Weight:</label>
      <input type="number" class="form-control" id="max_weight" placeholder="Max Weight" name="max_weight" value="<?php echo $max_weight; ?>" required>
    </div>
    <input type="hidden" name="id_weight" value="<?php echo $id_weight; ?>">
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>