<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="post">
      <div class="space-y-6">
        <div>
          <label for="body" class="block text-sm font-medium text-gray-900">Description</label>
          <textarea placeholder="Here's an idea for a note..."
            name="body"
            id="body"
            rows="3"
            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm"><?= $_POST['body'] ?? '' ?></textarea>


          <?php if (isset($errors['body'])): ?>
            <p class="text-sm text-red-600"><?= $errors['body'] ?></p>
          <?php endif; ?>
        </div>
        <div class="flex justify-center">
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </div>
    </form>
  </div>
</main>

<?php require 'views/partials/footer.php'; ?>