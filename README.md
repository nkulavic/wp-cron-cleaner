# wp-cron-cleaner
Simple external php script that you can run off of a cron job to clean messed up wp_single_events

This was created because there was not an easy way for me to check which cron jobs where in limbo...aka +5 years ahead for me. This was created so you can setup a background cron job with any server to check your site for old crons.

This will take the cron hook and the arguments that are associated with it to clear the scheduled hook.

Download and add to your root folder, or turn into a plugin. 
