UPDATE beautysalon.wp_posts
SET guid = REPLACE(guid, 'localhost/wp', '35.194.220.105:9200');

UPDATE beautysalon.wp_posts
SET post_content = REPLACE(post_content, 'localhost/wp', '35.194.220.105:9200');

UPDATE beautysalon.wp_users
SET user_url = REPLACE(user_url, 'localhost/wp', '35.194.220.105:9200');

UPDATE beautysalon.wp_comments
SET comment_author_url = REPLACE(comment_author_url, 'localhost/wp', '35.194.220.105:9200');

UPDATE beautysalon.wp_options
SET option_value = REPLACE(option_value, 'localhost/wp', '35.194.220.105:9200');

UPDATE beautysalon.wp_postmeta
SET meta_value = REPLACE(meta_value, 'localhost/wp', '35.194.220.105:9200');

UPDATE beautysalon.wp_wc_admin_note_actions
SET query = REPLACE(query, 'localhost/wp', '35.194.220.105:9200');

UPDATE beautysalon.wp_wc_product_download_directories
SET url = REPLACE(url, 'localhost/wp', '35.194.220.105:9200');



UPDATE beautysalon.wp_posts
SET guid = REPLACE(guid, '35.194.220.105:9200', 'localhost/wp');

UPDATE beautysalon.wp_posts
SET post_content = REPLACE(post_content, '35.194.220.105:9200', 'localhost/wp');

UPDATE beautysalon.wp_users
SET user_url = REPLACE(user_url, '35.194.220.105:9200', 'localhost/wp');

UPDATE beautysalon.wp_comments
SET comment_author_url = REPLACE(comment_author_url, '35.194.220.105:9200', 'localhost/wp');

UPDATE beautysalon.wp_options
SET option_value = REPLACE(option_value, '35.194.220.105:9200', 'localhost/wp');

UPDATE beautysalon.wp_postmeta
SET meta_value = REPLACE(meta_value, '35.194.220.105:9200', 'localhost/wp');

UPDATE beautysalon.wp_wc_admin_note_actions
SET query = REPLACE(query, '35.194.220.105:9200', 'localhost/wp');

UPDATE beautysalon.wp_wc_product_download_directories
SET url = REPLACE(url, '35.194.220.105:9200', 'localhost/wp');




UPDATE salon.db_posts
SET guid = REPLACE(guid, 'localhost/wp', '35.194.220.105:9200');

UPDATE salon.db_posts
SET post_content = REPLACE(post_content, 'localhost/wp', '35.194.220.105:9200');

UPDATE salon.db_users
SET user_url = REPLACE(user_url, 'localhost/wp', '35.194.220.105:9200');

UPDATE salon.db_comments
SET comment_author_url = REPLACE(comment_author_url, 'localhost/wp', '35.194.220.105:9200');

UPDATE salon.db_options
SET option_value = REPLACE(option_value, 'localhost/wp', '35.194.220.105:9200');

UPDATE salon.db_postmeta
SET meta_value = REPLACE(meta_value, 'localhost/wp', '35.194.220.105:9200');

UPDATE salon.db_wc_admin_note_actions
SET query = REPLACE(query, 'localhost/wp', '35.194.220.105:9200');

UPDATE salon.db_wc_product_download_directories
SET url = REPLACE(url, 'localhost/wp', '35.194.220.105:9200');



UPDATE phase2.db_posts
SET guid = REPLACE(guid, 'localhost', '35.194.220.105:9200');

UPDATE phase2.db_posts
SET post_content = REPLACE(post_content, 'localhost', '35.194.220.105:9200');

UPDATE phase2.db_users
SET user_url = REPLACE(user_url, 'localhost', '35.194.220.105:9200');

UPDATE phase2.db_comments
SET comment_author_url = REPLACE(comment_author_url, 'localhost', '35.194.220.105:9200');

UPDATE phase2.db_options
SET option_value = REPLACE(option_value, 'localhost', '35.194.220.105:9200');

UPDATE phase2.db_postmeta
SET meta_value = REPLACE(meta_value, 'localhost', '35.194.220.105:9200');

UPDATE phase2.db_wc_admin_note_actions
SET query = REPLACE(query, 'localhost', '35.194.220.105:9200');

UPDATE phase2.db_wc_product_download_directories
SET url = REPLACE(url, 'localhost', '35.194.220.105:9200');




UPDATE phase2.db_posts
SET guid = REPLACE(guid, '35.194.220.105:9200', 'localhost/wp');

UPDATE phase2.db_posts
SET post_content = REPLACE(post_content, '35.194.220.105:9200', 'localhost/wp');

UPDATE phase2.db_users
SET user_url = REPLACE(user_url, '35.194.220.105:9200', 'localhost/wp');

UPDATE phase2.db_comments
SET comment_author_url = REPLACE(comment_author_url, '35.194.220.105:9200', 'localhost/wp');

UPDATE phase2.db_options
SET option_value = REPLACE(option_value, '35.194.220.105:9200', 'localhost/wp');

UPDATE phase2.db_postmeta
SET meta_value = REPLACE(meta_value, '35.194.220.105:9200', 'localhost/wp');

UPDATE phase2.db_wc_admin_note_actions
SET query = REPLACE(query, '35.194.220.105:9200', 'localhost/wp');

UPDATE phase2.db_wc_product_download_directories
SET url = REPLACE(url, '35.194.220.105:9200', 'localhost/wp');