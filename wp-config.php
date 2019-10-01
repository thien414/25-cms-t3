<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'cms' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oPc?d@u[AS!{PfQ$j >Yr~E*8zAtyIwS!VL +n[+N=xBHbv:/R$0[C@q0=5QuK9-' );
define( 'SECURE_AUTH_KEY',  'm/4_R? ^ {l6t.c)<=bWtu/Z#}2:8~/xL$I?C3%<3{*us9*]sdc@3HVDyd?IrDS,' );
define( 'LOGGED_IN_KEY',    'T<%D+9i=fI|Bxple5@Nj9F}:Z[#2k4soQzl2&>X1nWJS7)UmQ4W)2P[}PH3)x5jN' );
define( 'NONCE_KEY',        'eb$Wc ?`j%rPiA4G1}F~raMKI,wzbfv|&7Z,$_d.([PP^co/sKxVsBh.uxp+P7U?' );
define( 'AUTH_SALT',        'A_r[jDSaI 6>Z*3vL70BMj HsBpymjQF7-I[l4YW8sK,n5Tn,&Gba_|>+uW%;?*s' );
define( 'SECURE_AUTH_SALT', 'S(h3S3HOD6J~leP+nv=%mNMl=.x[#e/X/ql.N;w;aw6oZ7{/oHSLhBBCji*oaW2p' );
define( 'LOGGED_IN_SALT',   '${nX{=8)MY9#?>F^)).mlO4!.vW$P_*FqdE1x[F_fA%Jl p%$Qp5g,,m?=#Py3}:' );
define( 'NONCE_SALT',       'RwVvx]UDBWJ;`TjA5kefguj0)-Sji8/Ri1vv^1l-O;g4k;I]`9/Q2VTdtmxX5%k.' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
