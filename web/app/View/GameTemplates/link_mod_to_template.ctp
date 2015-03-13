<?php
/*
 * Created on 02.07.2010
 *
 * Made for project TeamServer
 * by bulaev
 */
 //pr($modsList);
 include('loading_params.php');
?>
<?php echo $this->Form->create('GameTemplate', array('action' => 'linkModToTemplate')); ?>

	<div id="flash"><?php echo $this->Session->flash(); ?></div>
	<table border="0" cellpadding="0" cellspacing="3" width="95%">
	<tr>
		<td align="right" valign="top">Моды:
		</td>
		<td align="left"><?php echo $this->Form->input('Mod',
									array(	'options' => $modsList,
											'div' => false,
											'label' => false,
											 'style'=> 'width: 400px;
				  							  			height: 200px;
				  							  			'));?>
		</td>
	</tr>
	<tr>
			<td colspan="2" align="center"><?php
					echo $this->Form->input('id', array('type'=>'hidden'));
					// Пока неисправят баг в jQuery, будем отсылать обычной кнопкой
//					echo $this->Form->submit('Сохранить',
//											array('class' => 'ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only'));


					echo $this->Js->submit('Сохранить',
						array(
							'url'=> array(
											'controller'=>'GameTemplates',
											'action'=>'linkModToTemplate'
							 ),
							'update' => '#link_template',
							'class' => 'ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only',
							'before' =>$loadingShow,
							'complete'=>$loadingHide,
							'buffer' => false));
					?>

			</td>
	</tr>
 </table>

<?php echo $this->Form->end();?>