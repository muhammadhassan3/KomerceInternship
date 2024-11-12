<?php get_header(); ?>



<?php
$users = get_users();

if ($users) :
    // Mengelompokkan user berdasarkan divisi
    $divisi_users = array();

    foreach ($users as $user) {
        $divisi_id = get_user_meta($user->ID, 'divisi', true);
        $jabatan_id = get_user_meta($user->ID, 'jabatan', true);

        $nama_divisi = get_divisi_name_by_id($divisi_id);
        $nama_jabatan = get_jabatan_name_by_id($jabatan_id);

        if ($nama_divisi) {
            $divisi_users[$nama_divisi][] = array(
                'name' => $user->display_name,
                'avatar' => get_avatar_url($user->ID),
                'jabatan' => $nama_jabatan
            );
        }
    }

    foreach ($divisi_users as $divisi_name => $users_in_divisi) : ?>
        <!-- Judul divisi -->
        <div class="d-flex judul-divisi1">
            <h2 class="divisi-title"><?php echo esc_html($divisi_name); ?></h2>
        </div>
        <div class="card-container-ourteams">
            <!-- Membungkus user per divisi dalam div khusus untuk pengaturan grid -->
            <div class="users-grid" data-divisi="<?php echo esc_attr($divisi_name); ?>">
                <?php foreach ($users_in_divisi as $index => $user_info) : ?>
                    <div class="card-ourteams<?php echo $index >= 4 ? ' hidden' : ''; ?>">
                        <img class="card-image-ourteams" src="<?= esc_url($user_info['avatar']) ?>" alt="User Avatar" />
                        <div class="div-ourteams">
                            <h6 class="h6-font-name"><?php echo esc_html($user_info['name']); ?></h6>
                            <h6 class="h6-font"><?php echo !empty($user_info['jabatan']) ? esc_html($user_info['jabatan']) : 'Tidak diketahui'; ?></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (count($users_in_divisi) > 4) : ?>
                <!-- Tombol Tampilkan Lebih Banyak untuk setiap divisi, hanya jika user lebih dari 4 -->
                <div class="btn-ourteams">
                    <button class="load-more-button" data-divisi="<?php echo esc_attr($divisi_name); ?>">Tampilkan lebih banyak</button>
                    <button class="load-less-button" data-divisi="<?php echo esc_attr($divisi_name); ?>" style="display: none;">Tampilkan lebih sedikit</button>
                </div>



            <?php endif; ?>
        </div>
    <?php endforeach; ?>

<?php else : ?>
    <p>Tidak ada user yang ditemukan.</p>
<?php endif; ?>


<?php get_footer(); ?>