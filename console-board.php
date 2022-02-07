<?php

/*
Plugin Name: Ayutsuki Console Board
Plugin URI: 
Description: メールを送らずに変数内容とかを表示できるデバッグツール
Version: 1.0.0
Author: 鮎月 -Liteyan-
Author URI: https://ayutsuki.net/
License: GPL3
*/

function acb_consolelog()
{
    echo "ここに何か";
}


function acb_config_menu_add()
{
    add_menu_page(
        "Ayutsuki Console Board",
        "Console Board",
        "administrator",
        "acb_consoleboard",
        "acb_consolelog",
        "dashicons-code-standards",
        "19.4576"
    );
}
add_action("admin_menu", "acb_config_menu_add");
