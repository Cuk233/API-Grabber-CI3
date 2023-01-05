<a href=" <?php echo site_url('aircraft_type/insert'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless table-hover shadow p-3 mb-5 bg-white rounded" id="datatables">
	<thead class="thead-blue">
		<tr>
			<th>ID</th>
			<th>actype_code</th>
			<th>actype_name</th>
			<th>created_at</th>
			<th>updated_at</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($aircraft_type as $type) : ?>
			<tr>
				<td><?php echo $type['id']; ?></td>
				<td><?php echo $type['actype_code']; ?></td>
				<td><?php echo $type['actype_name']; ?></td>
				<td><?php echo $type['created_at']; ?></td>
				<td><?php echo $type['updated_at']; ?></td>
				<td>
				<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('aircraft_type/update/' . $type['actype_code']); ?>">
						Ubah
					</a>

					<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('aircraft_type/delete/' . $type['actype_code']); ?>" onClick="return confirm('Delete Aircraft Type = <?php echo $type['actype_code'];?> ?')">
                            Hapus
                    </a>

				</td>
			</tr>
			
		<?php endforeach ?>
	</tbody>
</table>