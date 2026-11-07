<?php
$flavors = [
    'aardbei' => [
        'name' => 'Aardbei',
        'image' => 'aardbei.jpg',
        'description' => 'Een frisse, fruitige ijssmaak met de zoete smaak van aardbeien.',
    ],
    'banaan' => [
        'name' => 'Banaan',
        'image' => 'bananenijs.jpg',
        'description' => 'Romig ijs met een zachte, zoete bananensmaak.',
    ],
    'smurfenijs' => [
        'name' => 'Smurfenijs',
        'image' => 'smurfijs.jpg',
        'description' => 'Een vrolijk blauw ijsje met een heerlijke zoete smaak.',
    ],
    'stracciatella' => [
        'name' => 'Stracciatella',
        'image' => 'stracciatellaijs.jpg',
        'description' => 'Romig ijs met lekkere stukjes chocolade.',
    ],
    'vanille' => [
        'name' => 'Vanille',
        'image' => 'vanille.jpg',
        'description' => 'Een klassieke, zachte en romige vanillesmaak.',
    ],
];

$slug = $_GET['smaak'] ?? '';
$flavor = is_string($slug) ? ($flavors[$slug] ?? null) : null;

include 'includes/header.php';
?>

<section class="mx-auto max-w-2xl rounded-xl bg-white p-6 shadow-md">
    <?php if ($flavor !== null): ?>
        <img
            class="mb-6 h-64 w-full rounded-lg object-cover"
            src="<?= htmlspecialchars($flavor['image'], ENT_QUOTES, 'UTF-8') ?>"
            alt="<?= htmlspecialchars($flavor['name'], ENT_QUOTES, 'UTF-8') ?>"
        >
        <h1 class="mb-3 text-3xl font-bold"><?= htmlspecialchars($flavor['name'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="mb-6 text-gray-700"><?= htmlspecialchars($flavor['description'], ENT_QUOTES, 'UTF-8') ?></p>
    <?php else: ?>
        <h1 class="mb-3 text-3xl font-bold">Smaak niet gevonden</h1>
        <p class="mb-6 text-gray-700">Kies een smaak uit het overzicht.</p>
    <?php endif; ?>

    <a class="inline-block rounded bg-pink-600 px-4 py-2 font-semibold text-white hover:bg-pink-700" href="smaken.php">
        Terug naar alle smaken
    </a>
</section>

<?php include 'includes/footer.php'; ?>
