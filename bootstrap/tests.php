<?php

use NunoMaduro\Collision\Provider;
use Illuminate\Contracts\Console\Kernel;
use Symfony\Component\Console\Output\ConsoleOutput;

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/app.php';

/** @var \Pterodactyl\Console\Kernel $kernel */
$kernel = $app->make(Kernel::class);

/*
 * Bootstrap the kernel and prepare application for testing.
 */
$kernel->bootstrap();

// Register the collision service provider so that errors during the test
// setup process are output nicely.
(new Provider())->register();

$output = new ConsoleOutput();

if (file_exists(base_path('bootstrap/cache/config.php'))) {
    $output->writeln('<error>Cannot run test process: your config is currently cached.');
    $output->writeln('<error>You must first run `php artisan config:clear` to continue.');
    exit(1);
}

if (config('database.default') !== 'testing') {
    $output->writeln('<error>Cannot run test process against non-testing database.</error>');
    $output->writeln('<error>Environment is currently pointed at: "' . config('database.default') . '".</error>');
    exit(1);
}

/*
 * Perform database migrations and reseeding before continuing with
 * running the tests.
 */
if (!env('SKIP_MIGRATIONS')) {
    $output->writeln(PHP_EOL . '<info>Refreshing database for Integration tests...</info>');
    $kernel->call('migrate:fresh', ['--database' => 'testing']);

    $output->writeln('<info>Seeding database for Integration tests...</info>' . PHP_EOL);
    $kernel->call('db:seed', ['--database' => 'testing']);
} else {
    $output->writeln(PHP_EOL . '<comment>Skipping database migrations...</comment>' . PHP_EOL);
}
