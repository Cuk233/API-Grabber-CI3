<a href=" <?php echo site_url('job_type/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless table-hover shadow p-3 mb-5 bg-white rounded" id="datatables">
	<thead class="thead-blue">
		<tr>
			<th>id_job</th>
			<th>job_name</th>
			<th>created_at</th>
			<th>updated_at</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>

        <?php foreach ($job_type as $job) : ?>
			<tr>
				<td><?php echo $job['id_job']; ?></td>
				<td><?php echo $job['job_name']; ?></td>
				<td><?php echo $job['created_at']; ?></td>
				<td><?php echo $job['updated_at']; ?></td>
				<td>
                        <!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('job_type/update/' . $job['id_job']); ?>">
                            Ubah
                        </a>

                        <!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
                        <a href="<?php echo site_url('job_type/delete/' . $job['id_job']); ?>" onClick="return confirm('Apakah anda yakin?')">
                            Hapus
                        </a>

                    </td>

			</tr>

		<?php endforeach ?>
	</tbody>
</table>