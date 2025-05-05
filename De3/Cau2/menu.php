<?php
// menu.php
$items = [
  'Trang chủ'             => 'home.php',
  'Tin tức'               => 'news.php',
  'Lịch tuần'             => 'schedule.php',
  'Văn bản'               => 'documents.php',
  'Hoạt động sinh viên'   => 'activities.php',
];
?>
<nav style="background:#004080; padding:10px;">
  <ul style="list-style:none; margin:0; padding:0; display:flex; gap:15px; justify-content:center;">
    <?php foreach($items as $label => $url): ?>
      <li><a href="<?= $url ?>" style="color:#fff; text-decoration:none; font-weight:bold;"><?= $label ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
