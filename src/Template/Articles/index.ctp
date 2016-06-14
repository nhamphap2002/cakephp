<?php ?>
<!-- File: src/Template/Articles/index.ctp (delete links added) -->
<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Blog articles</h3>

            <div class="box-tools">
                <?= $this->Html->link('Add Article', ['action' => 'add']) ?>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>

                <!-- Here's where we loop through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $article->id ?></td>
                    <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
                    </td>
                    <td>
            <?= $article->created->format(DATE_RFC850) ?>
                    </td>
                    <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
                    </td>
                </tr>
    <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>