<div class="container-fluid">  
    
    <!--link tambah data-->
    <br>
    <a href="<?php echo site_url('user/insert'); ?>" class="btn btn-primary">Tambah</a>
    <br><br>


    <table class="table table-borderless shadow p-3 mb-5 bg-white rounded" id="datatables">
        <thead class="thead-blue">
            <tr>
                <th>ID Number</th>
                <th>Nama</th>
                <th>Job Title</th>
                <th>PIC</th>
                <th>Role</th>
                <th>Action <br><br></th>
            </tr>
        </thead>
        <tbody>
            <!--looping data user-->
            <?php foreach ($data_user as $user) : ?>
                <!--cetak data per baris-->
                <tr>
                    <td><?php echo $user['id_number']; ?></td>
                    <td><?php echo $user['user_name']; ?></td>
                    <td><?php echo $user['job_title']; ?></td>
                    <td><?php echo $user['pic']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('user/reset/' . $user['id_number']); ?>" class="btn btn-info">
                            Reset Password
                        </a>
                        <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('user/update/' . $user['id_number']); ?>" class="btn btn-info">
                            Ubah
                        </a>

                        <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('aircraft_data/delete/' . $user['id_number']); ?>"  onClick="return confirm('Delete User = <?php echo $user['user_name'];?> ?')"" class="btn btn-danger">
                            Hapus
                        </a>

                    </td>
                </tr>
                
            <?php endforeach ?>
        </tbody>
    </table>
    
</div>