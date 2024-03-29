<<<<<<< HEAD
<!-- File: src/Template/Articles/index.ctp  (編集リンク付き) -->

<h1>記事一覧</h1>
<p><?= $this->Html->link("記事の追加", ['action' => 'add']) ?></p>
<table>
	<tr>
		<th>タイトル</th>
		<th>作成日時</th>
		<th>操作</th>
	</tr>

	<!-- ここで、$articles クエリーオブジェクトを繰り返して、記事情報を出力します -->

	<?php foreach ($articles as $article): ?>
	<tr>
		<td>
			<?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
		</td>
		<td>
			<?= $article->created->format(DATE_RFC850) ?>
		</td>
		<td>
			<?= $this->Html->link('編集', ['action' => 'edit', $article->id]) ?>
			<?= $this->Form->postLink(
			'Delete',
			['action' => 'delete', $article->id],
			['confirm' => '本当に削除しますか?'])
			?>
		</td>
	</tr>
	<?php endforeach; ?>

=======
<h1>記事一覧</h1>
<table>
    <tr>
        <th>タイトル</th>
        <th>作成日時</th>
    </tr>

    <!-- ここで、$articles クエリーオブジェクトを繰り返して、記事の情報を出力します -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
>>>>>>> origin/master
</table>
