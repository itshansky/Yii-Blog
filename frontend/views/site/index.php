<?php

/* @var $this yii\web\View */

use common\models\Berita;
use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = 'My Blog';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>My Blog</h1>
        <p class="lead">Farhan Rinsky Mulya | 1811081034 | TRPL 3A</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-8">
                <?= ListView::widget([
                    'dataProvider' => $dataProvider,
                    'layout' => "{items}\n{pager}",
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => '_itemBerita'
                ]);
                ?>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                <div class="panel-heading"> Top Artikel</div>
                            <div class="panel-body">
                        <ul>
                            <?php foreach (Berita::topBerita() as $row) : ?>
                                <li>
                                    <?= Html::a($row->judul . ' (' . $row->jml_baca . ')', [
                                        'view',
                                        'id' => $row->id_berita
                                    ]) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>