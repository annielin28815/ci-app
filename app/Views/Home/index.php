<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content") ?>
  <h1>Welcome</h1>

  <?php if (auth()->loggedIn()): ?>
    <a href="<?= url_to("logout") ?>">Log out</a>
  <?php else: ?>
    <a href="<?= url_to("login") ?>">Log out</a>
  <?php endif; ?>
<?= $this->endSection() ?>
  