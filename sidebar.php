<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    
    <aside id="secondary" class="widget-area" style="padding: 20px; background: #fff; border-left: 1px solid #ddd;">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>

<?php endif; ?>