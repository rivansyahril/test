

<div class="container">
  <h2>Weight Data</h2>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Max</th>
        <th>Min</th>
        <th>Variance</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      
      <?php $min=0;$max=0;$var=0;foreach($d_weight as $dat){
      $min = $dat->min_weight; $max = $dat->max_weight; $var= (int)$dat->max_weight - (int)$dat->min_weight; ?>
        <tr>
        <td><?php echo $dat->create_date; ?></td>
        <td><?php echo $dat->max_weight; ?></td>
        <td><?php echo $dat->min_weight; ?></td>
        <td><?php echo $var; ?></td>
        <td><a href="<?php echo site_url('edit/index/'.$dat->id_weight); ?>">Edit</a></td>
        </tr>
      <?php $min++;$max++;} ?>
      <tr>
        <td><strong>Average</strong></td>
        <td><?php echo $min; ?></td>
        <td><?php echo $max; ?></td>
        <td><?php echo $var; ?></td>
      </tr>
    </tbody>
  </table>
</div>

