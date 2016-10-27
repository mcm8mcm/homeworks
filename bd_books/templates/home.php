<?php 
include_once 'models/book.php';
$data = Book_Model::getBook();
?>
<div class="row">
	<div class=col-lg-offset-1>
		<div class="col-lg-10">
			<?php if(count($data) == 0) { ?>
				<h2> Сожелею, но в базе сейчас нет ни одонй книги </h2>
			<?php } else { ?>
				<div class="well">
					<h3 style="text-align: center;">Список книг в базе</h3>
					<table class="table table-bordered">
						<thead>
							<tr style="border: 1px solid black;">
								<th style="text-align: center;border: 1px solid black;width: 1%; white-space: nowrap;">№п/п</th>
								<th style="text-align: center;border: 1px solid black;">Автор</th>
								<th style="text-align: center;border: 1px solid black;">Наименование</th>
								<th style="text-align: center;border: 1px solid black;">Издатель</th>
								<th style="text-align: center;border: 1px solid black;">Дата издания</th>						
							</tr>
						</thead>
						
						<tbody>
							<?php foreach($data as $nom=>$row) { ?>
								<tr>
									<td style="border: 1px solid black;width: 1%; white-space: nowrap;"><?=++$nom;?></td>
									<td style="border: 1px solid black;"><?=$row['title'];?></td>
									<td style="border: 1px solid black;"><?=$row['author'];?></td>
									<td style="border: 1px solid black;"><?=$row['publisher'];?></td>
									<td style="border: 1px solid black;text-align: center;"><?=$row['pub_year'];?></td>
								</tr>
							<?php } ?>
						</tbody>
						
					</table>			
				</div>
			<?php } ?>
		</div>	
	</div>
</div>