<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel wdmg\bookmarks\models\BookmarksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $this->context->module->name;
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-header">
    <h1>
        <?= Html::encode($this->title) ?> <small class="text-muted pull-right">[v.<?= $this->context->module->version ?>]</small>
    </h1>
</div>
<div class="bookmarks-index">
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{summary}<br\/>{items}<br\/>{summary}<br\/><div class="text-center">{pager}</div>',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'user_id',
            'user_ip',
            'entity_id',
            'target_id',
            'is_like',
            'created_at',
            'updated_at',
        ],
        'pager' => [
            'options' => [
                'class' => 'pagination',
            ],
            'maxButtonCount' => 5,
            'activePageCssClass' => 'active',
            'prevPageCssClass' => '',
            'nextPageCssClass' => '',
            'firstPageCssClass' => 'previous',
            'lastPageCssClass' => 'next',
            'firstPageLabel' => Yii::t('app/modules/bookmarks', 'First page'),
            'lastPageLabel'  => Yii::t('app/modules/bookmarks', 'Last page'),
            'prevPageLabel'  => Yii::t('app/modules/bookmarks', '&larr; Prev page'),
            'nextPageLabel'  => Yii::t('app/modules/bookmarks', 'Next page &rarr;')
        ],
    ]); ?>
    <hr/>
    <?php Pjax::end(); ?>
</div>

<?php echo $this->render('../_debug'); ?>
