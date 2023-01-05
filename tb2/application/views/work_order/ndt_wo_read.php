<a href=" <?php echo site_url('ndt_wo/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless shadow p-3 mb-5" id="datatables">
    <thead class="thead-blue">
        <tr>
            <th>ID</th>
            <th>WO Number</th>
            <th>Date in</th>
            <th>Date out</th>
            <th>Status</th>
            <th>Revision number</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>remark</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($ndt_wo as $ndt_data) : ?>
            <tr>
                <td><?php echo $ndt_data['id'] ?></td>
                <td><?php echo $ndt_data['wo_number']; ?></td>
                <td><?php echo $ndt_data['date_in']; ?></td>
                <td><?php echo $ndt_data['date_out']; ?></td>
                <td><?php echo $ndt_data['status']; ?></td>
                <td><?php echo $ndt_data['revision_number']; ?></td>
                <td><?php echo $ndt_data['created_at']; ?></td>
                <td><?php echo $ndt_data['updated_at']; ?></td>
                <td><?php echo $ndt_data['remark']; ?></td>
                <td>
                    <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('ndt_wo/update/' . $ndt_data['wo_number']); ?>">
                        Ubah
                    </a>

                    <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('ndt_wo/delete/' . $ndt_data['wo_number']); ?>" onClick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>