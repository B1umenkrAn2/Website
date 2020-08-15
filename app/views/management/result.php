<?php
if (!empty($_SESSION['user'])) {


    header('Location:' . URL . 'Management/login');
}

?>

<section class="container text-center">
    <?php if (is_string($result)): ?>
    <div class="my-5 py-5">
        <h3  class=" text-center"><?php echo $result ?></h3>
    </div>
    <?php elseif (isset($result['total'])): ?>
    <div class="my-5 py-5">
            <h3 class="text-center">Updata data completed! <?php echo $result['total'] ?> rows record have been
                Updata. <?php echo $result['success'] ?> success and <?php echo $result['failure'] ?> failure </h3>
    </div>
        <?php endif; ?>

    <input class="btn btn-primary"  type="button" onclick="window.location.href='http://<?php echo fullUrl ?>'" value="back"/>
</section>
