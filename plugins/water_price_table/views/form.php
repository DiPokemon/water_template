<?php

$mode = $_GET['view']; // $mode = add / edit
$form_title = ($mode == 'add' ? 'Добавление' : 'Редактирование');
$form_action = WATER_PRICE_PLUGIN_ADMIN_URL . '&action=add';

if ($mode == 'edit')
	$form_action = WATER_PRICE_PLUGIN_ADMIN_URL . '&action=edit';

?>

<div class="wrap">
	<h1 class="wp-heading-inline"><?= $form_title ?> цены</h1>
	<a href="<?= WATER_PRICE_PLUGIN_ADMIN_URL ?>" class="page-title-action">← Назад</a>

	<form method="post" action="<?= $form_action ?>" novalidate="novalidate">
		<?php if ($mode == 'edit'): ?>
			<input type="hidden" name="data_id" value="<?= self::$model->id ?>" >
		<?php endif ?>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="city">Город</label>
					</th>
					<td>
						<input name="data_city" type="text" id="city" value="<?= self::$model->city ?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="price_apparts">Квартира цена</label>
					</th>
					<td>
						<input name="data_price_apparts" type="number" min="0" max="10000" id="price_apparts" value="<?= self::$model->price_apparts?>" class="regular-text">
					</td>
				</tr>	
				<tr>
					<th scope="row">
						<label for="price_house">Цена дом</label>
					</th>
					<td>
						<input name="data_price_house" type="number" min="0" max="10000" id="price_house" value="<?= self::$model->price_house?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="price_well">Цена колодец</label>
					</th>
					<td>
						<input name="data_price_well" type="number" min="0" max="10000" id="price_well" value="<?= self::$model->price_well?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="benefit_apparts">Льгота квартира</label>
					</th>
					<td>
						<input name="data_benefit_apparts" type="number" min="0" max="10000" id="benefit_apparts" value="<?= self::$model->benefit_apparts?>" class="regular-text">
					</td>
				</tr>	
				<tr>
					<th scope="row">
						<label for="benefit_house">Льгота дом</label>
					</th>
					<td>
						<input name="data_benefit_house" type="number" min="0" max="10000" id="benefit_house" value="<?= self::$model->benefit_house?>" class="regular-text">
					</td>
				</tr>
				<tr>
					<th scope="row">
						<label for="benefit_well">Льгота колодец</label>
					</th>
					<td>
						<input name="data_benefit_well" type="number" min="0" max="10000" id="benefit_well" value="<?= self::$model->benefit_well?>" class="regular-text">
					</td>
				</tr>	
			</tbody>
		</table>
		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения">
		</p>
	</form>

</div>