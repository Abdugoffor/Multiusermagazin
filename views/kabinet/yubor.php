<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Yuborilgan maxsulotlar jadvali</div>
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
													<th>Yuborilgan vaqt</th>
												</tr>
											</thead>
											<tbody>
												<? $i=1; $sum=0; foreach ($models as $model) {?>
		
									<tr>
										<td><?=$i; $i++;?></td>
										<td><?=$model->ism?></td>
										<td><?=$model->tel?></td>
										<td><?=$model->tovar->name?></td>
										<td><?=$model->tovar->narx?></td>
										<td><?=$model->soni?></td>
										<td><?=$model->sum?>$</td>
										<td><?=$model->date_z?></td>
										<td><?=$model->date_y?></td>
										
										
									</tr>

									<? $sum=$sum+$model->sum; }?>
												
								<h2>Jami savdo : <?=number_format($sum,0,".",' ')?>$</h2>									
											</tbody>
										</table>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
</div>				