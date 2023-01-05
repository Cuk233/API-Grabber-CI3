<a href=" <?php echo site_url('aircraft_data/submit'); ?>"" class=" btn btn-primary">Tambah Data</a>

<br><br>

<table class="table table-borderless table-responsive shadow p-3 mb-5" id="datatables">
	<thead class="thead-blue">
		<tr>
			<!-- <th>ID</th> -->
			<th>Revision Number</th>
			<th>Maintenance Type</th>
			<th>Ac Reg</th>
			<th>Aircraft Type</th>
			<th>Engine Type</th>
			<th>Customer</th>
			<th>Date in</th>
			<th>Date Out</th>
			<th>Status</th>
			<th>Project Owner</th>
			<th>Hangar Location</th>
			<!-- <th>Created at</th>
			<th>Updated at</th> -->
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($aircraft_data as $data) : ?>

			<tr>
				<!-- <td><?php echo $data['id']; ?></td> -->
				<td><?php echo $data['revision_number']; ?></td>
				<td><?php echo $data['maintenance_type']; ?></td>
				<td><?php echo $data['ac_reg']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['engine_type']; ?></td>
				<td><?php echo $data['customer']; ?></td>
				<td><?php echo $data['date_in']; ?></td>
				<td><?php echo $data['date_out']; ?></td>
				<td><?php echo $data['status']; ?></td>
				<td><?php echo $data['project_owner']; ?></td>
				<td><?php echo $data['hangar_location']; ?></td>
				<!-- <td><?php echo $data['created_at']; ?></td>
				<td><?php echo $data['updated_at']; ?></td> -->
				<td>
					<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('aircraft_data/update/' . $data['revision_number']); ?>">
						Ubah
					</a>

					<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('aircraft_data/delete/' . $data['revision_number']); ?>" onClick="return confirm('Delete Revision Number = <?php echo $data['revision_number']; ?> ?')">
						Hapus
					</a>

				</td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>