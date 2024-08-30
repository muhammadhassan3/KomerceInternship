<?php get_header(); ?>

<div class="card-container">
    <?php
    $users = get_users();
    // $users = get_users(array(
    //     'role__not_in' => array('Administrator')
    // ));

    if ($users) : ?>
        <?php foreach ($users as $user) : ?>
            <?php
            $avatars = get_avatar_url($user->ID);

            $divisi_id = get_user_meta($user->ID, 'divisi', true); 
            $jabatan_id = get_user_meta($user->ID, 'jabatan', true);
            $role_id = get_user_meta($user->ID, 'capabilities', true);

            $divisi_name = get_divisi_name_by_id($divisi_id);
            $jabatan_name = get_jabatan_name_by_id($jabatan_id);
            ?>
            <div class="card-ourteams">
                <img class="card-image-ourteams" src="<?= esc_url($avatars) ?>" alt="User Avatar" />
                <div class="div-ourteams">
                <h6 class="h6-font">Nama : <?php echo esc_html($user->display_name); ?></h6>
                <!-- <p><?php echo esc_html($user->user_email); ?></p> -->
                <!-- <p><?php echo esc_html($user->user_login); ?></p> -->
                <h6 class="h6-font">Divisi : <?php echo !empty($divisi_name) ? esc_html($divisi_name) : 'Tidak diketahui'; ?></h6>
                <h6 class="h6-font">Jabatan : <?php echo !empty($jabatan_name) ? esc_html($jabatan_name) : 'Tidak diketahui'; ?></h6>
                </div>
                
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Tidak ada user yang ditemukan.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

