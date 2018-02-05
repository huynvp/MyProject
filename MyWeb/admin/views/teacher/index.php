<h3>Quản lí giáo viên</h3>

<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Mã giáo viên</th>
				<th>Họ tên</th>
				<th>Ngày sinh</th>
				<th>Địa chỉ</th>
				<th>Email</th>
				<th>Tình trạng</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			$list = $this->list;
			foreach ($list as $key => $value) {
				if($value['STATUS'])
					$status = "Đang hoạt động";
				else $status = "Ngưng hoạt động";
				echo "<tr>";
					echo '<td> 
						<a class="btn btn-sm btn-warning" href="?controller=teacher&action=edit&id='. $value['ID'] .'" role="button"><span class="glyphicon glyphicon-edit"></span></a>
						<a class="btn btn-sm btn-danger" href="?controller=teacher&action=remove&id='. $value['ID'] .'" role="button"><span class="glyphicon glyphicon-remove"></span></a>
						'. $value['ID'] .'
					</td>';
					echo "<td>". $value['FULL_NAME'] ."</td>";
					echo "<td>". date("d/m/Y", strtotime($value['BIRTHDAY'])) ."</td>";
					echo "<td>". $value['ADDRESS'] ."</td>";
					echo "<td>". $value['MAIL'] ."</td>";
					echo "<td>". $status ."</td>";
				echo "</tr>";	
			}
		?>			
		</tbody>		
	</table>

	<a class="btn btn-lg btn-success" href="?controller=teacher&action=add" role="button">Thêm giáo viên mới</a>
	
</div>