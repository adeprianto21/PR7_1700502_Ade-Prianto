<div class="container">
  <h3 class="text-center mt-5">Gerbong Right Join Kursi</h3>

  <table class="table mt-4">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Kode Kereta</th>
        <th scope="col">Kode Gerbong</th>
        <th scope="col">Nama Gerbong</th>
        <th scope="col">Kode Kursi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($right_join as $rj) : ?>
      <tr>
        <th><?php echo $rj->kd_kereta; ?></th>
        <td><?php echo $rj->kd_gerbong; ?></td>
        <td><?php echo $rj->nama; ?></td>        
        <td><?php echo $rj->kd_kursi; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>