<a href=" <?php echo site_url('ppe_wo/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless table-responsive shadow p-3 mb-5" id="datatables">
    <thead class="thead-blue">
        <tr>
            <th>WO number</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Date in</th>
            <th>Date out</th>
            <th>SP in</th>
            <th>SP out</th>
            <th>Status</th>
            <th>Revision Number</th>
            <th>Component Location</th>
            <th>PIC</th>
            <th>Component Removed Status</th>
            <th>Doc number</th>
            <th>DOC</th>
            <th>Created at</th>
            <th>Updated_at</th>
            <th>ID PPE</th>
            <th>remark</th>
            <th>job_type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($ppe_wo as $ppe_data) : ?>
            <tr>
                <td><?php echo $ppe_data['wo_number']; ?></td>
                <td><?php echo $ppe_data['description']; ?></td>
                <td><?php echo $ppe_data['quantity']; ?></td>
                <td><?php echo $ppe_data['date_in']; ?></td>
                <td><?php echo $ppe_data['date_out']; ?></td>
                <td><?php echo $ppe_data['sp_in']; ?></td>
                <td><?php echo $ppe_data['sp_out']; ?></td>
                <td><?php echo $ppe_data['status']; ?></td>
                <td><?php echo $ppe_data['revision_number']; ?></td>
                <td><?php echo $ppe_data['component_location']; ?></td>
                <td><?php echo $ppe_data['pic']; ?></td>
                <td><?php echo $ppe_data['component_removed_status']; ?></td>
                <td><?php echo $ppe_data['doc_number']; ?></td>
                <td><?php echo $ppe_data['doc']; ?></td>
                <td><?php echo $ppe_data['created_at']; ?></td>
                <td><?php echo $ppe_data['updated_at']; ?></td>
                <td><?php echo $ppe_data['id_ppe']; ?></td>
                <td><?php echo $ppe_data['remark']; ?></td>
                <td><?php echo $ppe_data['job']; ?></td>
                <td>
                    <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('ppe_wo/update/' . $ppe_data['wo_number']); ?>">
                        Ubah
                    </a>

                    <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                    <a href="<?php echo site_url('ppe_wo/delete/' . $ppe_data['wo_number']); ?>" onClick="return confirm('Apakah anda yakin?')">
                        Hapus
                    </a>

                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>