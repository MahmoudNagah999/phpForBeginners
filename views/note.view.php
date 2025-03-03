<?php require "partials/head.php"?>

<?php require "partials/nav.php"?>

<?php require "partials/banner.php"?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-4">
            <a href="/notes" class="text-blue-500 hover:underline">Back to notes</a>
        </p>
        <p> <?= htmlspecialchars($note['body']) ?> </p>
    </div>
</main>

<?php require "partials/foot.php"?>