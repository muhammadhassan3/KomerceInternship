<?php get_header(); ?>

<div class="d-flex judul-divisi1">
        <h1 class="divisi-title">Blog</h1>
</div>
<div class="card-container-ourteams">
    <?php
    // Mendapatkan semua user
    $users = get_users();
    // $users = get_users(array(
    //     'role__not_in' => array('Administrator')
    // ));

    // Mengecek apakah ada user yang tersedia
    if ($users) : ?>
        
        <?php foreach ($users as $user) : ?>
            <?php
            $avatars = get_avatar_url($user->ID);

            // Mengambil divisi dan jabatan user dari metadata
            $divisi_id = get_user_meta($user->ID, 'divisi', true); 
            $jabatan_id = get_user_meta($user->ID, 'jabatan', true);

            // Mendapatkan nama divisi dan jabatan berdasarkan ID
            $nama_divisi = get_divisi_name_by_id($divisi_id);
            $nama_jabatan = get_jabatan_name_by_id($jabatan_id);

            // Menampilkan hanya user dengan divisi C-Level
            if ($nama_divisi === 'C-Level') : ?>
                <div class="card-ourteams">
                    <img class="card-image-ourteams" src="<?= esc_url($avatars) ?>" alt="User Avatar" />
                    <div class="div-ourteams">
                        <h6 class="h6-font-name"><?php echo esc_html($user->display_name); ?></h6>
                        <h6 class="h6-font"><?php echo !empty($nama_jabatan) ? esc_html($nama_jabatan) : 'Tidak diketahui'; ?></h6>
                    </div>
                </div>
            <?php endif; ?>
            
        <?php endforeach; ?>
    <?php else : ?>
        <p>Tidak ada user yang ditemukan.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
