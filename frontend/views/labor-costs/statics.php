<?php

use common\models\LaborCosts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use common\models\User;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var common\models\LaborCostsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Трудозатраты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labor-costs-index">
<table class="table table-striped table-bordered">

<tbody>



    <? foreach ($users as $res) { ?>
    <tr>
    <td>
    <h2> <?=$res->username?></h2>
    </td>
    </tr>
    <tr>
    <td>
    <table class="table">
        <thead>
            <tr>    
                
                <th>Месяц</th>  
                <th>Количество задач</th>
                <th>Количество часов</th>
                <th>Список задач</th>
            </tr>
        </thead>
        <tbody>
        
            <tr>
                <td>Этот месяц</td>
                <td><?=count($res->tasksmonth)?></td>
                <td><?=$res->countSum($res->lcostsmonth)?></td>
                <td>
                  
                    <table>
                    <tr>    
                        <th>Часы</th>
                        <th>Название задачи</th>  
                    </tr> 
                    
                        <?foreach($res->tasksmonth as $task) {?>
                            <tr><td><?=$res->countSum($task->laborcost)?></td><td><?=$task->name?></td></tr>  
                        <?}?>
                    
                    </table>
                  
                </td>
            </tr>

            <tr>
           
                <td>Предыдущий месяц</td>
                <td><?=count($res->tasksmonthprev)?></td>
                <td><?=$res->countSum($res->lcostsmonthprev)?></td>
                <td>
                <table>
                    <tr>    
                        <th>Часы</th>
                        <th>Название задачи</th>  
                   </tr>    
                   
                        <?foreach($res->tasksmonthprev as $task) {?>
                            <tr> <td><?=$res->countSum($task->laborcost)?></td><td><?=$task->name?></td></tr>
                        <?}?>
                   
                    </table>
                </td>
            </tr>   
                         
        </tbody>
    </table>
    </td>
</tr>
<? }?>
</tbody>
</table>
</div>

