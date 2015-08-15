<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link rel="stylesheet" href="../flexslider.css" type="text/css" />
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" charset="utf-8">
	$(window).load(function() {
	$('.flexslider').flexslider();
	$('.flexslider').css('width', '600');
	  $('.flexslider').css('height', '350');
	  $('.flexslider .slides li img').css('width', '600');
	  $('.flexslider .slides li img').css('height', '350');
	});
	</script>

</head>
<body>
<div id="wrapper01">
	<div id="header">
          <div class="header_color">
            <div id="header_main">
              <div class="header_left_box"><a href="#"><img src="../img/header_logo.png" alt="ロゴ" width="140" height="116"></a></div>
              <div class="header_left_box"><a href="#"><img src="../img/header_img01.png"></a></div>
              <div class="header_left_box"><a href="#"><img src="../img/header_img02.png"></a></div>
              <div class="header_right_box"><a href="#"><img src="../img/header_img04.png"></a></div>
              <div class="header_right_box"><a href="#"><img src="../img/header_img03.png"></a></div>
            </div>
          </div>
      </div>
	<div id="container">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div class="footer_top">
				<ul>
					<li><a href="#">TOP </a>|</li>
					<li><a href="#">たきけんとは</a>　|</li>
					<li><a href="#">たきざわの魅力</a>　|</li>
					<li><a href="#">テスト問題</a>　|</li>
					<li><a href="#">作問に挑戦</a></li>
				</ul>
			</div>
			<div id="footer_main">
				<div class="footer_left">
					<div class="header_left_box">
					<img src="../img/footer_logo.png" alt="ロゴ" width="140" height="116">
					</div>
				</div>
				<div class="footer_right">
				<ul>
					<li>主催：たきざわ検定委員会</li>
					<li>開発：岩手県立大学</li>
					<li>TEL：000-0000-0000</li>
					<li>FAX：00-0000-0000</li>
				</ul>
				</div>
			</div>
		</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
