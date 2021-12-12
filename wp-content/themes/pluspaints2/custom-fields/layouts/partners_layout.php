<section id="brendet">
    <div class="brendet">
        <div class="brendet-content container">
            <div class="heading">
                <p><span>PARTNERËT </span>TANË</p>
            </div>
            <div class="logot">
                <?php if (have_rows('partners')): ?>
                    <?php while (have_rows('partners')) : the_row(); ?>
                        <div class="logo">
                            <a href="ibavet.php"> <img src="./assets/images/ibavet.png" alt=""></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>