<form action="options.php" method="POST">
    <?php
settings_fields('ShParserMainSettings');
do_settings_sections('sh-parser-development-plugin');
submit_button();
    ?>
</form>