<a href=" <?php echo site_url('doc_type/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless shadow p-3 mb-5" id="datatables">
	<thead class="thead-blue">
		<tr>
			<th>id_doc</th>
			<th>doc name Type</th>
            <th>created at</th>
            <th>updated at</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($doc_type as $doc_data) : ?>
			<tr>
				<td><?php echo $doc_data['id_doc'] ?></td>
				<td><?php echo $doc_data['doc_name']; ?></td>
                <td><?php echo $doc_data['created_at'];?></td>
                <td><?php echo $doc_data['updated_at'];?></td>
				<td>
                        <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('doc_type/update/' . $doc_data['id_doc']); ?>">
                            Ubah
                        </a>

                        <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('doc_type/delete/' . $doc_data['id_doc']); ?>" onClick="return confirm('Apakah anda yakin?')">
                            Hapus
                        </a>

                    </td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>