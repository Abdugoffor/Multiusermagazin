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
													<th>Ism</th>
													<th>Tel</th>
													<th>Maxsulot</th>
													<th>Narx</th>
													<th>Soni</th>
													<th>To'lov</th>
													<th>Buyurtma vaqt</th>
													<th>Ko'rish</th>
													<th>O'chirish</th>
													<th>Activ</th>
												</tr>
											</thead>
											<tbody>

	<? $i=1; foreach ($models as $model) {?>
		<tr>
			<td>
				<?=$i; $i++;?>
			</td>
			<td>
				<?=$model->ism?>
			</td>
			<td>
				<?=$model->tel?>
			</td>
			<td>
				<?=$model->tovar->name?>
			</td>
			<td>
				<?=$model->tovar->narx?>
			</td>
			<td>
				<?=$model->soni?>
			</td>
			<td>
				<?=number_format($model->sum,2,".",' ')?> $
			</td>
			<td>
				<?=$model->date_z?>
			</td>
			<td>
				<a href="<?=Url::to(['kabinet/view','id'=>$model->id])?>" class='btn btn-success'><i class="la la-eye "></i></a>
			</td>
			<td>
				<a href="<?=Url::to(['kabinet/delete','id'=>$model->id])?>" class='btn btn-success'><i class="la la-trash"></i></a>
			</td>
			<td>
				<?php
					if ($model->activ==0) {?>
						<a href="<?=Url::to(['kabinet/activ','id'=>$model->id,'a'=>1])?>" class='btn btn-danger' title='Yangi'><i class="la la-shopping-cart"></i></a>
					<?}
					if ($model->activ==1) {?>
						<a href="<?=Url::to(['kabinet/activ','id'=>$model->id,'a'=>1])?>" class='btn btn-info' title='Yuborilgan'><i class="la la-check"></i></a>
					<?}
				?>
			</td>
		</tr>
	<?}?>
										</table>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
</div>				