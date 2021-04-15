<div class="wrap stwp-contenedor">
<div id="icon-upload" class="icon32"></div>
<h2 class="titulo-pagina"><?php _e( 'Scan Tool WP - Dashboard', 'scan-tool-wp' ); ?><span class="stwp-version"> Versión <?php global $stwp_plugin_version; global $stwp_plugin_author; echo $stwp_plugin_version.' - '. $stwp_plugin_author; ?></span></h2>
<div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
        <!-- Contenido principal -->
        <div id="post-body-content">
            <div id="plugins-themes" class="meta-box-sortables ui-sortable">
                <div class="postbox caja-stwp">
                    <h3><span><?php _e( 'Temas', 'scan-tool-wp' ); ?></span></h3>
                    <div class="inside">
                    <?php
                        $tema_activo = get_stylesheet();
                        $temas = wp_get_themes( );
                        //var_dump($themes);
                        $html_temas = '<div class="contenedor-temas">';
                        foreach($temas as $key => $tema){
                            if ($key == $tema_activo){
                                $html_temas .= '<div class="tema activo">';
                                //echo 'Activo '.$value['Name'].'';
                            }else{
                                $html_temas .= '<div class="tema">';
                                //echo $value['Name'];
                            }
                            $html_temas .= sprintf('<p>%s</p>', $tema['Name']);
                            $html_temas .= '</div>';
                        }
                        $html_temas .= '</div>';
                        _e($html_temas, 'scan-tool-wp');
                        ?>
                    </div> <!-- .inside Themes -->
                </div> <!-- .postbox Themes -->
                <div class="postbox caja-stwp caja-plugins">
                    <h3><span><?php _e( 'Plugins', 'scan-tool-wp' ); ?></span></h3>
                    <div class="inside">
                        <?php
                            $plugins = get_plugins();
                            $html_plugin = '<div class="contenedor-plugins">';
                            foreach($plugins as $key => $plugin){
                                if (is_plugin_active($key)){
                                    $html_plugin .= '<div class="plugin activo">';
                                    //echo 'Plugin active '.$plugin['Name'].'';
                                    //echo '</br>';
                                }
                                if (is_plugin_inactive($key)){
                                    $html_plugin .= '<div class="plugin inactivo">';
                                    //echo 'Plugin inactive '.$plugin['Name'].'';
                                    //echo '</br>';
                                }
                                $html_plugin .= sprintf('<p class="titulo-plugin">%s</p>',$plugin['Name']);
                                $html_plugin .= sprintf( __( '<span>Versión %s | Por %s</span>', 'scan-tool-wp' ), $plugin['Version'], $plugin['Author']);
                                $html_plugin .= '</div>';
                            }
                            $html_plugin .= '</div>';
                            _e($html_plugin, 'scan-tool-wp');
                        ?>
                    </div> <!-- .inside Plugins -->
                </div> <!-- .postbox Plugins -->
            </div> <!-- Columna 1 Plugins y Temas -->
        </div> <!-- Plugins y Temas -->
        <!-- Sidebar info adicional -->
        <div id="postbox-container-1" class="postbox-container">
            <div class="meta-box-sortables">
                <div class="postbox caja-stwp info-sitio">
                    <h3><span><?php _e( 'Información del sitio', 'svg-support' ); ?></span></h3>
                    <div class="inside">
                        <p><?php _e( sprintf( __( 'Nombre del sitio web:</br> <strong>%s - %s</strong>', 'scan-tool-wp' ), get_bloginfo( 'name' ), get_bloginfo( 'description' ))); ?></p>
                        <p><?php _e( sprintf( __( 'URL de instalación:</br> <strong>%s</strong>', 'scan-tool-wp' ), get_bloginfo( 'url' ))); ?></p>
                        <p><?php _e( sprintf( __( 'Versión Wordpress: <strong>%s</strong>', 'scan-tool-wp' ), get_bloginfo( 'version' ))); ?></p>
                        <p><?php _e( sprintf( __( 'URL de Wordpress: </br> <strong>%s</strong>', 'scan-tool-wp' ), get_bloginfo( 'wpurl' ))); ?></p>
                        <?php 
                        foreach ( array( 'post', 'page' ) as $post_type ) {
                            $num_posts = wp_count_posts( $post_type );
                            if ( $num_posts && $num_posts->publish ) {
                                if ( 'post' === $post_type ) {
                                    _e( sprintf( __( '<p>Número de blogs publicados: <strong>%s</strong></p>', 'scan-tool-wp' ), $num_posts->publish));
                                } else {
                                    _e( sprintf( __( '<p>Número de páginas publicadas: <strong>%s</strong></p>', 'scan-tool-wp' ), $num_posts->publish));
                                }
                            }
                        }
                        ?>
                    </div> <!-- .inside Información del sitio -->
                </div> <!-- .postbox Información del sitio -->
            </div> 
        </div> <!-- Columna 2 Información del sitio -->
    </div> 
    <br class="clear">
</div> <!-- #poststuff -->
</div> <!-- .wrap -->
