<?php require 'incs/header.php';

defined("MYAPP") or die('Вам сюда не полжено');

?>



        <main class="main py-3">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <?= $post ?>

                    </div>

                    <?php require 'incs/sidebar.php'; ?>
                </div>
            </div>

        </main>

        <?php require 'incs/footer.php'; ?>