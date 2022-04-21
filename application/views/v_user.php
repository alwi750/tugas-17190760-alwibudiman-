<section>
    <h1><? $judul; ?></h>
    <?php foreach ($user as $user) { ?>
        <div>
            <ul>
            <li><? $user['nama']; ?></li>
            <li><? $user['email']; ?></li>
    </ul>
    </div>
    <?php } ?>
    </section>

    