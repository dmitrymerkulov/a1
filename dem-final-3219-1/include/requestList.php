<?
if ($_SESSION['user_role'] == 'user'):
	$query = "select * from requests where user_id = $_SESSION[user_id]";
elseif ($_SESSION['user_role'] == 'admin'):
	$query = "select requests.*, user.fio as fio 
	from requests left join user on requests.user_id = user.id";
endif;
require_once '../db/connection.php';
$requestList = $conn -> query($query); 
?>
<div class="requestList">
	<? foreach ($requestList as $request):?>
		<div class="request">
			<p>Номер заявки: <?=$request['id']?></p>
			<p>Телефон: <?=$request['tel']?></p>
			<p>Адрес: <?=$request['address']?></p>
			<p>Дата и время: <?=$request['date']?> <?=$request['time']?></p>
			<p>Описание: <?=$request['service']?></p>
			<p>Вид оплаты: <?=$request['payment']?></p>
			<p>Статус: <?=$request['status']?></p>
			<? if ($_SESSION['user_role'] == 'admin' && ($request['status']=='Новая' or $request['status']=='В работе')): ?>
				<p>Клиент: <?=$request['fio']?></p>
				<form action="../php/changeStatus.php?id=<?=$request['id']?>" method="post">
					<select name="newStat" class="changeStatus">
						<option value="В работе">В работе</option>
						<option value="Выполненно">Выполненно</option>
						<option value="Отменено">Отменено</option>
					</select>
					<textarea name="reject" placeholder="Причина отмены" class="hidden"></textarea>
					<input type="submit" value="Сменить">
				</form>
			<? endif; ?>
			<? if  ($request['status']=='Отменено'): ?>
				<p>Причина отмены: <?=$request['reject']?></p>
			<? endif; ?>
		</div>
	<? endforeach; ?>
			<a href="../php/logout.php">Выйти</a>
</div>
<? ?>