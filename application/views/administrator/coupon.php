<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h4 mb-2 text-gray-800 mb-4">Kupon</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-body py-3">
			<a
				href="<?= base_url(); ?>administrator/coupon/add"
				class="btn btn-primary"
				>TAMBAH</a
			>
		</div>
		<div class="card-body">
			<?php echo $this->session->flashdata('failed'); ?> 
			<?php if($coupon->num_rows() > 0){ ?>
			<div class="table-responsive">
				<table
					class="table table-bordered"
					id="dataTable"
					width="100%"
					cellspacing="0"
				>
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Kode Kupon</th>
                            <th>Nilai</th>
                            <th>Min. Belanja</th>
                            <th>Limit</th>
                            <th>Masa Berlaku</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tfoot></tfoot>
					<tbody class="data-content">
                        <?php $no = 1 ?>
						<?php foreach($coupon->result_array() as $data): ?>
						<tr>
                            <td><?= $no ?></td>
                            <td><?= $data['name']; ?></td>
							<td><?= $data['code']; ?></td>
							<td>Rp<?= number_format($data['discount'],0,",","."); ?></td>
							<td>Rp<?= number_format($data['min'],0,",","."); ?></td>
							<td><?= $data['limit_user']; ?> per user</td>
                            <td><?= date("d-m-Y", strtotime($data['dated'])) ?></td>
                            <td>
                                <a href="<?= base_url() ;?>administrator/coupon/<?= $data['id']; ?>" class="text-primary mr-3 h5"><i class="fa fa-pen"></i></a>
                                <a href="<?= base_url() ;?>administrator/delete_coupon/<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus kupon?')" class="text-danger h5"><i class="fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<?php }else{ ?>
			<div class="alert alert-warning" role="alert">
				Opss, kupon masih kosong, yuk tambah kupon sekarang.
			</div>
            <?php } ?>
		</div>
	</div>
</div>
<!-- /.container-fluid -->