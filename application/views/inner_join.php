<div class="container">
  <h3 class="text-center mt-5">Lokomotif Join Gerbong Join Kursi</h3>

  <table class="table mt-4">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Kode Kereta</th>
        <th scope="col">Nama Kereta</th>
        <th scope="col">Kode Gerbong</th>
        <th scope="col">Nama Gerbong</th>
        <th scope="col">Kode Kursi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($inner_join as $ij) : ?>
      <tr>
        <th><?php echo $ij->kd_kereta; ?></th>
        <td><?php echo $ij->nama; ?></th>
        <td><?php echo $ij->kd_gerbong; ?></td>
        <td><?php echo $ij->nama_gerbong; ?></td>        
        <td><?php echo $ij->kd_kursi; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>