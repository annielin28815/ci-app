<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>User<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>User</h1>

<dl>
  <dt>email</dt>
  <dd><?= esc($user->email) ?></dd>
  
  <dt>First Name</dt>
  <dd><?= esc($user->first_name) ?></dd>
  
  <dt>Created</dt>
  <dd><?= esc($user->created_at) ?></dd>

  <dt>Groups</dt>
  <dd>
    <?= implode(", ", $user->getGroups()) ?>
    <a href="<?= url_to("\Admin\Controllers\Users::groups", $user->id) ?>">edit</a>
  </dd>
</dl>

<?= form_open("admin/users/" . $user->id . "/toggle-ban") ?>
  <button>
    <?= $user->isBanned() ? "Unban" : "Ban" ?>
  </button>
</form>

<?= $this->endSection() ?>