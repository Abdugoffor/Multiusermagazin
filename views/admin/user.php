<?php
use yii\helpers\Url;

?>
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Zakazlar jadvali</div>
									</div>
									<div class="card-body">
										<table class="table table table-hover">
											<thead>
												<tr>
													<th>№</th>
													<th>User</th>
													<th>Parol</th>
													<th>Rasm</th>
													
												</tr>
											</thead>
											<tbody>

	<? $i=1; foreach ($models as $model) {?>
		<tr>
			<td>
				<?=$i; $i++;?>
			</td>
			<td>
				<?=$model->username?>
			</td>
			<td>
				<?=$model->password?>
			</td>
			<td>
				<img src="<?=$model->img?>" width="100px">
			</td>
			<td>
				<a href="<?=Url::to(['admin/userd','id' => $model->id])?>" class='btn btn-danger'><i class="la la-trash"></i></a>
			</td>
		</tr>
		<?}?>

								</tbody>
							</table>