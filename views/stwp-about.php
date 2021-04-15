<div class="wrap">
<div id="icon-upload" class="icon32"></div>
<?php 
    // Variables globales
    global $stwp_plugin_version;
    global $stwp_plugin_author;
?>
<h2><?php _e( 'Scan Tool WP - About', 'scan-tool-wp' ); ?></h2>
<div id="poststuff">
    <div id="post-body" class="metabox-holder">
        <!-- Contenido principal -->
        <div id="post-body-content">
            <div id="info-plugin" class="meta-box-sortables ui-sortable">
                <div class="postbox">
                    <h3><span><?php _e( 'Información del Plugin', 'scan-tool-wp' ); ?></span></h3>
                    <div class="inside">
                    <p><?php _e( sprintf( __( 'Autor del plugin: <strong>%s</strong>', 'scan-tool-wp' ), $stwp_plugin_author)); ?></p>
                    <p><?php _e( sprintf( __( 'Versión del plugin: <strong>%s</strong>', 'scan-tool-wp' ), $stwp_plugin_version)); ?></p>
                    <div class="redes-sociales">
                     <a href="https://www.facebook.com/nativapps" target="_blank"><span class="dashicons dashicons-facebook"></span></a>
                     <a href="https://www.instagram.com/nativapps/" target="_blank"><span class="dashicons dashicons-instagram"></span></a>
                     <a href="https://www.linkedin.com/company/nativapps-inc/" target="_blank"><span class="dashicons dashicons-linkedin"></span></a>
                    </div>
                    </div> <!-- .inside Info Plugin -->
                </div> <!-- .postbox Información plugin -->
            </div> <!-- Columna información plugin -->
        </div> <!-- Información plugin y redes sociales -->
    </div> 
    <br class="clear">
</div> <!-- #poststuff -->
</div> <!-- .wrap -->
