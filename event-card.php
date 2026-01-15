<div class="card">

    <a href="Product Pages/<?= $id ?>.php" class="cardLink">
        <div class="cardTitle"><?= $name ?></div>

        <div class="cardImageWrapper">
            <img
                class="cardImage"
                src="/Images/Products/<?= $id ?>.png"
                alt="<?= htmlspecialchars($name) ?>"
            >
        </div>

        <div class="cardContent">
            <?= $description ?>
        </div>
    </a>

    <div class="cardContent">
        Stock: <?= $stock ?>
    </div>

    <div class="cardPrice">
        &pound;<?= number_format($price, 2) ?>
    </div>

    <form method="post">
        <input type="hidden" name="pid" value="<?= $id ?>">

        <select name="qty" required style="display:block; margin:0 auto; margin-top:10px;">
            <option value="">Qty</option>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>

        <button class="standard-button" style="display:block; margin:10px auto;">
            Add to cart
        </button>
    </form>

</div>
