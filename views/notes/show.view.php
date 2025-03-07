<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/notes" class="text-blue-500 hover:underline">Go back...</a>
    </p>
    <p>
      <?= htmlspecialchars($note['body']) ?>
    </p>

    <form class="mt-6" method="POST">
      <input type="hidden" name="_method" value = "DELETE">
      <input name="id" type="hidden" value="<?= $note['id'] ?>">
      <button type="submit" class="text-red-500">Delete Note</button>
    </form>
  </div>
</main>


<?php require base_path('views/partials/footer.php'); ?>