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
define( 'DB_NAME', 'thanhthien' );

/** Username của database */
define( 'DB_USER', 'thanhthien' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'thien414' );

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
define( 'AUTH_KEY',         '%&*2ia5CnUA;ORUb3eH_0z[oo30ge0+By6)99>q@y>l{9?.s_MwTKr!gamZ>i2M4' );
define( 'SECURE_AUTH_KEY',  '|EDq{1B?QEsJWG^yR#/d3HA]uBceM Xk +n]T/BHr&JYN1yKT17fX[ _*&Qf.K:S' );
define( 'LOGGED_IN_KEY',    '7_-8OCw&B%,:Y9SM,-O2?Mv?/o97KaHqQy`/tuBG_[cTh}$qtjb/KV&B@+Sh71Ax' );
define( 'NONCE_KEY',        ':]B`1BkHZf-NJ,(6&ka>6!n~5gWLtP[) w+)|mp[*0uHom,jSbgz=%hj61]u66}v' );
define( 'AUTH_SALT',        'Jq#3H*rMW=kx#:@qP`{B>D}^0IB:M@ckiQ#*l4E+6Y2Qh:K}9y~<8-jQFCm;[~cg' );
define( 'SECURE_AUTH_SALT', '3ava|_8n*i)NyZI^VCt1Buw& [`h/gS>C(9 pI.-j]esPqaGG>`U eCOGv!aF3Eh' );
define( 'LOGGED_IN_SALT',   'I+p{gtpkJ6F]qAPKQ%^Vhc#/)9~WeP^jke@A-hHKAJI^E=BW:jWE6&R4aEbVTp#3' );
define( 'NONCE_SALT',       'E+St0^QVE57{ 8k=zdOX6TM`)x24}YL-Sr[,44C`ibc>^ni55V{L)*=IHV+hWPHo' );

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
