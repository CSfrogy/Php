<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/note">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $note['id']?>">
      <div class="space-y-6">
        <div>
          <label for="body" class="block text-sm font-medium text-gray-900">Description</label>
          <textarea placeholder="Here's an idea for a note..."
            name="body"
            id="body"
            rows="3"
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"><?= $note['body'] ?></textarea>


          <?php if (isset($errors['body'])): ?>
            <p class="text-sm text-red-600"><?= $errors['body'] ?></p>
          <?php endif; ?>
        </div>
        <div class="flex justify-center px-4 py-3 sm:6px flex gap-x-3">
          <a href="/notes" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>

          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
      </div>
    </form>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>