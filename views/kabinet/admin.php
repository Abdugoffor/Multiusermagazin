<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
?>
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Dashboard</h4>
						<div class="row">
							<div class="col-md-3">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-users"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Zakazlarni soni</p>
													<h4 class="card-title">
														<?=count($zakaz)?> ta
													</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-bar-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Yuborilgan</p>
													<h4 class="card-title">
														<?=count($savdo)?> ta
													</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-newspaper-o"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Qolgan maxsulot</p>
													<h4 class="card-title">
														<?=count($models)?> ta 
													</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-check-circle"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Kassa</p>
													<h4 class="card-title">
											<? $sum=0; foreach ($savdo as $s) {
												$sum=$sum+$s->sum;
											} echo $sum; ?> $
															
														</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Sotuvdagi maxsulotlar jadvali</div>
									</div>
									<div class="card-body">
										<table class="table table table-hover">
											<thead>
												<tr>
													<th>№</th>
													<th>Nom</th>
													<th>Categorya</th>
													<th>Narx</th>
													<th>Skidka</th>
													<th>Rasm</th>
													<th>Soni</th>
													<th>Sana</th>
													<th>Function</th>
												</tr>
											</thead>
											<tbody>
												<? $i=1; foreach ($models as $model) {?>
		
									<tr>
										<td><?=$i; $i++;?></td>
										<td><?=$model->name?></td>
										<td><?=$model->cate->name?></td>
										<td><?=$model->narx?></td>
										<td><?if (empty($model->skidka)) {
											echo"No";
										}else{
											echo$model->skidka;
										}

										?></td>
										<td><img src="<?=$model->img?>" width='100px' height='80px'></td>
										<td><?
								if ($model->soni==0) {?>
								<a  class="btn btn-danger"><i class="la la-close"></i></a>
								<?}else{
										echo $model->soni.' ta';
									}?>
										</td>
										<td><?=$model->date?></td>
										
										<td>
											<!-- View -->

								<a href="<?=Url::to(['kabinet/views','id'=>$model->id])?>" class="btn btn-success">
								<i class="la la-eye"></i>
								</a>

											<!-- Edit -->
								<a href="<?=Url::to(['kabinet/edit','id'=>$model->id])?>" class="btn btn-info">
									<i class="la la-pencil"></i>
								</a>

											<!-- Delet -->

								<a href="<?=Url::to(['kabinet/delet','id'=>$model->id])?>" class="btn btn-danger">
								<i class="la la-trash"></i>
								</a>
										</td>
									</tr>

									<?}?>
																				
											</tbody>
										</table>
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
</div>				