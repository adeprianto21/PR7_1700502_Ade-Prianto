<div class="container">
  <h3 class="text-center mt-5">Lokomotif Left Join Kursi</h3>

  <table class="table mt-4">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Kode Kereta</th>
        <th scope="col">Nama Kereta</th>
        <th scope="col">Kode Gerbong</th>
        <th scope="col">Kode Kursi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($left_join as $lj) : ?>
      <tr>
        <th><?php echo $lj->kd_kereta; ?></th>
        <td><?php echo $lj->nama; ?></td>
        <td><?php echo $lj->kd_gerbong; ?></td>
        <td><?php echo $lj->kd_kursi; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>