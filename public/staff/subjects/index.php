
    <?php require_once('../../../private/inisialize.php'); ?>
    <?php $page_title ="Staff menu"; ?>
    <?php include(SHARED_PATH . '/staff_header.php'); ?>


        <div id="content">
            <div id="main-menu">
                <h1>Main menu</h1>
                this is subject index page
                <ul>
                  <li><a href="<?php echo url_for('staff/subjects/index.php') ?>">Subjects</a></li>
                </ul>
            </div>
        </div>

    <?php include(SHARED_PATH .'/staff_footer.php'); ?>
