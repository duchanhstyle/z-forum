<div class="hdr">Chủ đề của <?php echo $this->u['dname']  ?></div>
<div class="box">
<?php $n = count($this->data); for($i = 0; $i < $n; $i++): $a = $this->data[$i]; ?>
    <div class="topx">
        <span class="li">•</span> <a href="<?php echo URL; ?>/threads/<?php echo Helper::mkURL($a['thread_name'], $a['thread_id']) ?>/"><?php echo $a['thread_name'] ?></a>&nbsp;
        (<?php echo $a['numpost'] . '/' . $a['view']; ?>)&nbsp;
        <?php if($a['numpost'] > PPP): $p = ceil($a['numpost']/PPP); ?><a href="<?php echo URL; ?>/threads/<?php echo Helper::mkURL($a['thread_name'], $a['thread_id']) . '/page-' . $p ?>/">&raquo;</a><?php endif;?><br />
        Bài cuối: <a href="<?php echo URL . '/members/' . $a['user_name'] . '.' . $a['user_id']; ?>/"><font color="<?php echo Helper::level_color($a['level']); ?>"><?php echo $a['dname']; ?></font></a>&nbsp;
        Ngày gửi: <?php echo date('H:i d.m.Y', $a['time']) ;?>
    </div>
<?php endfor; ?>
</div>