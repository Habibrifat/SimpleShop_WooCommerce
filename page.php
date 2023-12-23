<?php
if (is_shop()){
    get_template_part('shop');
}else{
    echo get_option_value('opt-text','default');
    echo "get_option_value('opt-text','default')";
}
?>
