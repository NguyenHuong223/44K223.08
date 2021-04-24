<?php
/*
Template Name: Đăng Nhập
*/
?>
<?php
/**
 * The template for displaying all pages.
 *
 * @package flatsome
 */


if(flatsome_option('pages_template') != 'default') {
	
	// Get default template from theme options.
	get_template_part('page', flatsome_option('pages_template'));
	return;

} else {

get_header();
do_action( 'flatsome_before_page' ); ?>
	<div class="row row-main">
		<div class="large-12 col">
			<div class="col-inner">
			    <div id="content" class="content-area page-wrapper" role="main">
<p><label><font color="##BB0000"> <font size="8px"> ĐĂNG NHẬP </font></p></label>
<p><label>*Nếu bạn đã có tài khoản hãy đăng nhập tại đây. Nếu chưa có tài khoản bấm vào đây để <a href="http://tiengtrungak.site/dang-ky-thanh-vien/" target="_blank" ><font color="##FF0000">đăng ký </font></a>.</p></label>
	<div class="dang-nhap">
<?php if(is_user_logged_in()) { $user_id = get_current_user_id();$current_user = wp_get_current_user();$profile_url = get_author_posts_url($user_id);$edit_profile_url = get_edit_profile_url($user_id); ?>
<div class="da-dang-nhap">
Bạn đã đăng nhập với tài khoản <a href="<?php echo $profile_url ?>"><?php echo $current_user->display_name; ?></a> Hãy truy cập <a href="/wp-admin"><font color="##000099">Quản trị viên </font></a> hoặc <a href="<?php echo esc_url(wp_logout_url($current_url)); ?>"><font color="##000099">Đăng xuất tài khoản </font></a>
</div>
<?php } else { ?>

<div class="thong-bao">
<?php
$login = (isset($_GET['login']) ) ? $_GET['login'] : 0;
if ( $login === "failed" ) {
echo '<p>Sai tên đăng nhập hoặc mật khẩu!</p>';
} elseif ( $login === "empty" ) {
echo '<p>Bạn đã thoát tài khoản!</p>';
} elseif ( $login === "false" ) {
echo '<p>Bạn đã thoát tài khoản!</p>';
}
?>
</div>
<?php
$args = array(
'redirect' => site_url( $_SERVER['REQUEST_URI'] ),
'form_id' => 'dangnhap',
'label_username' => __( 'Tên tài khoản' ),
'label_password' => __( 'Mật khẩu' ),
'label_remember' => __( 'Ghi nhớ' ),
'remember' => false,
'label_log_in' => __( 'Đăng nhập' ),
);
wp_login_form($args);
?>
</div>
<?php } ?>	
			
			
			</div><!-- .col-inner -->
		</div><!-- .large-12 -->
	</div><!-- .row -->
</div>

<?php
do_action( 'flatsome_after_page' );
get_footer();

}

?>
<style>
dang-nhap{margin-top:150px;margin-bottom:150px;width:40%;max-width:1400px;margin-left:auto;margin-right:auto}
.dang-dang-nhap{margin-top:500px;}
@media (max-width: 600px) {
.dang-nhap{width:90%}
}
#user_login{width:100%}
#user_pass{width:100%}
</style>