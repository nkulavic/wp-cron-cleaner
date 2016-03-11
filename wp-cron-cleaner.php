<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
$cron_jobs = get_option( 'cron' );
$date = strtotime('+5 years');
$count = 0;
foreach($cron_jobs as $job => $value) {
		if($job > $date) {
			foreach($value as $k => $v) {
				foreach($v as $n => $g) {
					wp_clear_scheduled_hook( $k, $g['args'] );
					$count++;
				}
			}
		}
}
echo 'cleaned - '.$count;
?>
